const images = document.querySelectorAll('section img');

images.forEach(img => {
  img.addEventListener('mouseenter', () => {
    anime({
      targets: img,
      rotate: '1turn',
      duration: 1000,
      easing: 'easeOutQuad'
    });
  });

  img.addEventListener('mouseleave', () => {
    anime({
      targets: img,
      rotate: '0turn',
      duration: 1000,
      easing: 'easeOutQuad'
    });
  });
});
