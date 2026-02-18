const slider = document.querySelector(".fleet-slider");
const track = document.getElementById("fleetTrack");
const dotsWrap = document.getElementById("fleetDots");

let originalCards = Array.from(document.querySelectorAll(".fleet-card"));
const originalCount = originalCards.length;

let activeIndex = 0;
let autoPlayInterval = null;
const autoPlayTime = 3000;

function cloneAllSlides() {
  // clone all slides and add to end (for smooth infinite)
  originalCards.forEach(card => {
    const clone = card.cloneNode(true);
    clone.classList.add("clone");
    track.appendChild(clone);
  });

  // clone all slides and add to start (for smooth infinite)
  for (let i = originalCards.length - 1; i >= 0; i--) {
    const clone = originalCards[i].cloneNode(true);
    clone.classList.add("clone");
    track.insertBefore(clone, track.firstChild);
  }
}

cloneAllSlides();

let cards = Array.from(document.querySelectorAll(".fleet-card"));

// start position = first real slide (after clones)
let currentPosition = originalCount + activeIndex;

function getStep() {
  const cardWidth = cards[0].getBoundingClientRect().width;
  const gap = parseInt(getComputedStyle(track).gap || "25", 10);
  return cardWidth + gap;
}

function createDots() {
  dotsWrap.innerHTML = "";
  for (let i = 0; i < originalCount; i++) {
    const dot = document.createElement("span");
    dot.className = "fleet-dot";
    dot.addEventListener("click", () => {
      activeIndex = i;
      currentPosition = originalCount + activeIndex;
      updateSlider();
      restartAutoPlay();
    });
    dotsWrap.appendChild(dot);
  }
}

function updateDots() {
  const dots = Array.from(document.querySelectorAll(".fleet-dot"));
  dots.forEach(d => d.classList.remove("active"));
  dots[activeIndex].classList.add("active");
}

function updateActiveClass() {
  cards.forEach(c => c.classList.remove("active"));
  cards[currentPosition].classList.add("active");
}

function updateSlider(noAnim = false) {
  const step = getStep();

  if (noAnim) track.style.transition = "none";
  else track.style.transition = "transform 0.6s ease";

  const sliderWidth = slider.getBoundingClientRect().width;
  const cardWidth = cards[0].getBoundingClientRect().width;

  const centerOffset = (sliderWidth / 2) - (cardWidth / 2);
  const translateX = centerOffset - (currentPosition * step);

  track.style.transform = `translateX(${translateX}px)`;

  updateActiveClass();
  updateDots();
}

function nextSlide() {
  activeIndex++;
  if (activeIndex >= originalCount) activeIndex = 0;

  currentPosition++;
  updateSlider();

  // if we reach the end clones, jump back smoothly
  if (currentPosition >= cards.length - originalCount) {
    currentPosition = originalCount + activeIndex;
    setTimeout(() => updateSlider(true), 650);
  }
}

function startAutoPlay() {
  autoPlayInterval = setInterval(nextSlide, autoPlayTime);
}

function stopAutoPlay() {
  clearInterval(autoPlayInterval);
}

function restartAutoPlay() {
  stopAutoPlay();
  startAutoPlay();
}

slider.addEventListener("mouseenter", stopAutoPlay);
slider.addEventListener("mouseleave", startAutoPlay);

window.addEventListener("resize", () => updateSlider(true));

// init
createDots();
updateSlider(true);
startAutoPlay();
