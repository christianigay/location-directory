document.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  document.querySelectorAll('.scribble').forEach((el, i) => {
    const offset = (scrollY * 0.05) * (i % 2 === 0 ? 1 : -1);
    el.style.setProperty('--scrollY', `${offset}px`);
  });
});