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