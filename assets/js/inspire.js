window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  const scribbles = document.querySelectorAll('.scribble');

  scribbles.forEach((el, index) => {
    // Move scribbles gently up and down based on scroll position
    const amplitude = 10; // max movement in px
    const speed = 0.0025; // how responsive it is
    const offset = Math.sin(scrollY * speed + index) * amplitude;

    el.style.transform = `translateY(${offset}px) rotate(var(--rotate, 0deg))`;
  });
});

const modal = document.getElementById('registerModal');
const openBtn = document.querySelector('.hero-overlay button');
const closeBtn = document.querySelector('.close-btn');

openBtn.addEventListener('click', () => modal.classList.add('show'));
closeBtn.addEventListener('click', () => modal.classList.remove('show'));

window.addEventListener('click', (e) => {
  if (e.target === modal) modal.classList.remove('show');
});

document.getElementById('registerForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Thank you for registering! We’ll be in touch soon.');
  modal.classList.remove('show');
});

const style = document.createElement('style');
style.innerHTML = `
  #eut-page-title {
    display: none !important;
  }

#page-845593 > .eut-section:first-of-type {
  padding-left: 0 !important;
  padding-right: 0 !important;
}


`;
document.head.appendChild(style);


