let expandedCard = null;
let currentPhone = '';

// Event delegation for "View Details" buttons
document.addEventListener('click', (e) => {
  const button = e.target.closest('.view-details, .view-details-btn');
  if (!button) return;

  e.preventDefault();
  const card = button.closest('.card');
  const details = card.querySelector('.card-details');
  const isExpanded = card.classList.contains('expanded');
  const contactBar = document.querySelector('.contact-bar');

  // Collapse all expanded cards
  document.querySelectorAll('.card.expanded').forEach((c) => {
    c.classList.remove('expanded');
    const d = c.querySelector('.card-details');
    if (d) {
      d.style.maxHeight = '0';
      d.style.opacity = '0';
    }
    const btn = c.querySelector('.view-details, .view-details-btn');
    if (btn) btn.setAttribute('aria-expanded', 'false');
  });

  contactBar?.classList.remove('active');
  expandedCard = null;
  currentPhone = '';

  if (!isExpanded) {
    card.classList.add('expanded');
    button.setAttribute('aria-expanded', 'true');
    expandedCard = card;

    if (details) {
      details.style.maxHeight = details.scrollHeight + 'px';
      details.style.opacity = '1';
    }

    const phoneEl = card.querySelector('.card-phone a');
    if (phoneEl) {
      currentPhone = phoneEl.textContent.trim();
    }

    if (window.innerWidth <= 768) {
      contactBar?.classList.add('active');
    }

    card.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
});

// Keyboard support for accessibility
document.addEventListener('keydown', (e) => {
  if ((e.key === 'Enter' || e.key === ' ') && e.target.closest('.card')) {
    const button = e.target.closest('.card').querySelector('.view-details, .view-details-btn');
    if (button) {
      e.preventDefault();
      button.click();
    }
  }
});

// Contact button handler (click → call)
document.querySelector('.contact-btn')?.addEventListener('click', () => {
  if (currentPhone) {
    const cleanPhone = currentPhone.replace(/\D/g, '');
    window.location.href = `tel:${cleanPhone}`;
  }
});

// Handle window resize to hide contact bar on larger screens
window.addEventListener('resize', () => {
  if (window.innerWidth > 768) {
    document.querySelector('.contact-bar')?.classList.remove('active');
  }
});

// === Hamburger Menu Toggle ===
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

if (hamburger && navMenu) {
  hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('show');
    hamburger.classList.toggle('active');
  });
}

// === Dynamic Search with Fetch and Debounce ===

// Select elements
const searchInput = document.getElementById('search-input');
const grid = document.querySelector('.grid');

// Debounce helper: delays function calls while typing
function debounce(func, delay = 400) {
  let timeout;
  return (...args) => {
    clearTimeout(timeout);
    timeout = setTimeout(() => func(...args), delay);
  };
}

// Show skeleton loaders
function showSkeletons(count = 6) {
  grid.innerHTML = '';
  for (let i = 0; i < count; i++) {
    const skeleton = document.createElement('div');
    skeleton.className = 'card skeleton';
    skeleton.innerHTML = `
      <div class="card-image shimmer"></div>
      <div class="card-content">
        <div class="skeleton-text title shimmer"></div>
        <div class="skeleton-text line shimmer"></div>
        <div class="skeleton-text line shimmer"></div>
        <div class="skeleton-btn shimmer"></div>
      </div>
    `;
    grid.appendChild(skeleton);
  }
}

// Render city cards
function renderCities(grid, cities, query) {
  grid.innerHTML = '';

    if (cities.length === 0) {
      grid.innerHTML = `<div class="no-results">No results found for "${query}"</div>`;
      return;
    }

    cities.forEach(city => {
      const card = document.createElement('div');
      card.className = 'card';
      card.innerHTML = `
        <div class="card-image" style="background-image: url('${city.image || ''}');"></div>
        <div class="card-content">
          <h4>${city.city || ''}</h4>
          <p class="description">${city.description || ''}</p>
          <div class="card-phone">
            <a href="tel:${(city.phone || '').replace(/\D/g, '')}">
              ${city.phone || ''}
            </a>
          </div>
          <button class="view-details" aria-expanded="false">View Details</button>
          <div class="card-details">
            <p><strong>Address:</strong> ${city.address || ''}</p>
            <p><strong>Price:</strong> ${city.price || ''}</p>
            <p><strong>Hours:</strong> ${city.hours || ''}</p>
          </div>
        </div>
      `;
      grid.appendChild(card);
    });
}

// Fetch cities from server
async function fetchCities(query = '') {
  try {
    showSkeletons();
    const startTime = Date.now();

    const url = `/search.php?city=${encodeURIComponent(query)}`;
    const response = await fetch(url);

    if (!response.ok) throw new Error(`HTTP ${response.status}`);

    const result = await response.json();
    const cities = result.results || [];

    const elapsed = Date.now() - startTime;
    const minDisplayTime = 600;
    const remaining = Math.max(0, minDisplayTime - elapsed);

    setTimeout(() => renderCities(grid, cities, query), remaining);
    
  } catch (error) {
    console.error('Fetch error:', error);
    grid.innerHTML = `<div class="error">Something went wrong. Please try again later.</div>`;
  }
}

// Search handler
const handleSearch = debounce(e => {
  const query = e.target.value.trim();
  fetchCities(query);
}, 500);

searchInput.addEventListener('input', handleSearch);

showSkeletons();
fetchCities('');
