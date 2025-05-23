// Initialize AOS animation library

const artName = document.querySelector(".art-name");

document.querySelectorAll(".facebook").forEach((el) => {
    el.setAttribute(
        "href",
        `https://www.facebook.com/sharer.php?u=${window.location.href}`
    );
});

document.querySelectorAll(".twitter").forEach((el) => {
    // console.log("twitter")
    el.setAttribute(
        "href",
        `https://twitter.com/intent/tweet?text=${artName.innerText}&url=${window.location.href}`
    );
});

document.querySelectorAll(".line").forEach((el) => {
    // console.log("line")
    el.setAttribute(
        "href",
        `https://lineit.line.me/share/ui?url=${window.location.href}"`
    );
});

// Carousel functionality
let currentSlide = 0;
const slideWidth = 320; // Width of each slide + margin
const slidesPerView =
    window.innerWidth > 768 ? 3 : window.innerWidth > 576 ? 2 : 1;
const slider = document.getElementById("videoSlider");
const slides = document.querySelectorAll(".video-item");
const totalSlides = slides.length;

// Function to move the carousel
function moveSlide(direction) {
    currentSlide = Math.max(
        0,
        Math.min(currentSlide + direction, totalSlides - slidesPerView)
    );
    slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

    // Add smooth animation effect
    slider.style.transition = "transform 0.5s ease-in-out";
}

document.querySelector(".prev").addEventListener("click", () => {
    moveSlide(-1);
});

document.querySelector(".next").addEventListener("click", () => {
    moveSlide(1);
});

// Copy link functionality
document.querySelectorAll(".copy-link").forEach((el) => {
    el.addEventListener("click", () => {
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            // Create and show toast notification
            const toast = document.createElement("div");
            toast.className = "copy-toast";
            toast.textContent = "ลิงก์ถูกคัดลอกแล้ว!";
            document.body.appendChild(toast);

            // Style the toast
            toast.style.position = "fixed";
            toast.style.bottom = "20px";
            toast.style.left = "50%";
            toast.style.transform = "translateX(-50%)";
            toast.style.backgroundColor = "#333";
            toast.style.color = "white";
            toast.style.padding = "10px 20px";
            toast.style.borderRadius = "4px";
            toast.style.zIndex = "1000";
            toast.style.opacity = "0";
            toast.style.transition = "opacity 0.3s ease";

            // Show and hide toast
            setTimeout(() => {
                toast.style.opacity = "1";
            }, 10);
            setTimeout(() => {
                toast.style.opacity = "0";
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 2000);
        });
    });
});

document.querySelector(".btn-rec").addEventListener("click", () => {
    // window.open("/HOMESPECTOR/Homepage/articles.php", "_blank")
    location.href = "/HOMESPECTOR/Homepage/articles.php";
});
document.querySelector(".btn-review").addEventListener("click", () => {
    window.open(
        "https://www.facebook.com/t.homeinspector/reviews?locale=th_TH",
        "_blank"
    );

    // location.href = "https://www.facebook.com/t.homeinspector/reviews?locale=th_TH"
});
document.querySelector(".btn-contact").addEventListener("click", () => {
    location.href = "/HOMESPECTOR/Homepage/Contactus.php";
});

// Responsive handling
window.addEventListener("resize", () => {
    const newSlidesPerView =
        window.innerWidth > 768 ? 3 : window.innerWidth > 576 ? 2 : 1;
    if (newSlidesPerView !== slidesPerView) {
        // Recalculate current slide position
        currentSlide = Math.min(currentSlide, totalSlides - newSlidesPerView);
        slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }
});

// Add image zoom functionality
const articleImages = document.querySelectorAll(".art-content img");
articleImages.forEach((img) => {
    img.addEventListener("click", function () {
        // Create modal for image zoom
        const modal = document.createElement("div");
        modal.className = "image-zoom-modal";
        modal.innerHTML = `
      <div class="zoom-container">
        <img src="${this.src}" alt="${this.alt}">
        <button class="close-zoom">×</button>
      </div>
    `;

        // Style the modal
        modal.style.position = "fixed";
        modal.style.top = "0";
        modal.style.left = "0";
        modal.style.width = "100%";
        modal.style.height = "100%";
        modal.style.backgroundColor = "rgba(0,0,0,0.9)";
        modal.style.zIndex = "1000";
        modal.style.display = "flex";
        modal.style.alignItems = "center";
        modal.style.justifyContent = "center";
        modal.style.opacity = "0";
        modal.style.transition = "opacity 0.3s ease";

        const zoomContainer = modal.querySelector(".zoom-container");
        zoomContainer.style.position = "relative";
        zoomContainer.style.maxWidth = "90%";
        zoomContainer.style.maxHeight = "90%";

        const zoomImg = modal.querySelector("img");
        zoomImg.style.maxWidth = "100%";
        zoomImg.style.maxHeight = "90vh";
        zoomImg.style.display = "block";
        zoomImg.style.boxShadow = "0 5px 30px rgba(0,0,0,0.3)";

        const closeBtn = modal.querySelector(".close-zoom");
        closeBtn.style.position = "absolute";
        closeBtn.style.top = "-20px";
        closeBtn.style.right = "-20px";
        closeBtn.style.backgroundColor = "#ff6b6b";
        closeBtn.style.color = "white";
        closeBtn.style.border = "none";
        closeBtn.style.borderRadius = "50%";
        closeBtn.style.width = "40px";
        closeBtn.style.height = "40px";
        closeBtn.style.fontSize = "24px";
        closeBtn.style.cursor = "pointer";
        closeBtn.style.display = "flex";
        closeBtn.style.alignItems = "center";
        closeBtn.style.justifyContent = "center";

        document.body.appendChild(modal);
        setTimeout(() => {
            modal.style.opacity = "1";
        }, 10);

        // Close modal on button click or background click
        closeBtn.addEventListener("click", closeModal);
        modal.addEventListener("click", (e) => {
            if (e.target === modal) closeModal();
        });

        function closeModal() {
            modal.style.opacity = "0";
            setTimeout(() => {
                document.body.removeChild(modal);
            }, 300);
        }
    });

    // Add cursor pointer to indicate clickable
    img.style.cursor = "zoom-in";
});

// Add reading progress indicator
const progressBar = document.createElement("div");
progressBar.className = "reading-progress";
progressBar.style.position = "fixed";
progressBar.style.top = "0";
progressBar.style.left = "0";
progressBar.style.height = "4px";
progressBar.style.backgroundColor = "#ff6b6b";
progressBar.style.width = "0%";
progressBar.style.zIndex = "1000";
progressBar.style.transition = "width 0.1s";
document.body.appendChild(progressBar);

window.addEventListener("scroll", () => {
    const windowHeight = window.innerHeight;
    const fullHeight = document.body.scrollHeight - windowHeight;
    const scrolled = window.scrollY;
    const progress = (scrolled / fullHeight) * 100;
    progressBar.style.width = progress + "%";
});

// Add estimated reading time
const articleContent = document.querySelector(".art-content");
if (articleContent) {
    const text = articleContent.textContent;
    const wordCount = text.split(/\s+/).length;
    const readingTime = Math.ceil(wordCount / 200); // Average reading speed: 200 words per minute

    const readingTimeElement = document.createElement("div");
    readingTimeElement.className = "reading-time";
    readingTimeElement.innerHTML = `<i class="bi bi-clock"></i> เวลาในการอ่านโดยประมาณ: ${readingTime} นาที`;

    const artHeader = document.querySelector(".art-cover-img");
    artHeader.appendChild(readingTimeElement);
}
