const categoryBtns = document.querySelectorAll(".category-btn");
const cards = document.querySelectorAll(".card");



categoryBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    // Remove active class from all buttons
    categoryBtns.forEach((btn) => btn.classList.remove("active"));
    btn.classList.add("active");

    const category = btn.getAttribute("data-category");

    // Show/Hide Cards
    cards.forEach((card) => {
      if (category === "all" || card.getAttribute("data-category") === category) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});


let currentIndex = 0;
const videos = document.querySelectorAll(".video-item");
const totalVideos = videos.length;
const videoSlider = document.getElementById("videoSlider");

var currentWinSize = 3;

function moveSlide(direction) {
    currentIndex += direction;

    let maxPage = Math.ceil(totalVideos / currentWinSize)
    if (currentIndex >= maxPage) {
        currentIndex = 0;
    }
    else if (currentIndex < 0) {
        currentIndex = maxPage - 1;
    }

    const offset = -currentIndex * 100 + "%";
    videoSlider.style.transform = "translateX(" + offset + ")";
}

// document.addEventListener("DOMContentLoaded", () =
window.addEventListener("resize", () => {
  const windowWidth = window.innerWidth;

  if (windowWidth < 768) {
    videoSlider.style.transform = `translateX("${-currentIndex * 100}%")`;
    currentWinSize = 1;
  }

  else {
    currentIndex = 0;
    currentWinSize = 3
    videoSlider.style.transform = "translateX(0)";
  }
});