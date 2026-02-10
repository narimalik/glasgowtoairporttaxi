function initCarousel(carousel) {
  const track = carousel.querySelector('.carousel-track');
  let slides = Array.from(track.children);

  const slidesToShow = window.innerWidth <= 768 ? 1 : 3;
  let index = slidesToShow;

  // clone last slides to start
  slides.slice(-slidesToShow).forEach(slide => {
    track.insertBefore(slide.cloneNode(true), track.firstChild);
  });

  // clone first slides to end
  slides.slice(0, slidesToShow).forEach(slide => {
    track.appendChild(slide.cloneNode(true));
  });

  slides = Array.from(track.children);

  const slideWidth = slides[0].getBoundingClientRect().width;

  track.style.transform = `translateX(-${slideWidth * index}px)`;

  function move() {
    index++;
    track.style.transition = 'transform 0.5s ease';
    track.style.transform = `translateX(-${slideWidth * index}px)`;

    // reset without animation
    if (index >= slides.length - slidesToShow) {
      setTimeout(() => {
        track.style.transition = 'none';
        index = slidesToShow;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
      }, 500);
    }
  }

  setInterval(move, 3000);
}