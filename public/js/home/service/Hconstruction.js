// Scroll Animation
document.addEventListener('DOMContentLoaded', function() {
    // เริ่มต้นแสดง Hero Section
    setTimeout(() => {
        document.querySelector('.logo-container').style.opacity = '1';
        document.querySelector('.logo-container').style.transform = 'translateY(0)';
        
        setTimeout(() => {
            document.querySelector('.hero-title').style.opacity = '1';
            document.querySelector('.hero-title').style.transform = 'translateY(0)';
            
            setTimeout(() => {
                document.querySelector('.hero-description').style.opacity = '1';
                document.querySelector('.hero-description').style.transform = 'translateY(0)';
                
                setTimeout(() => {
                    document.querySelector('.hero-btn').style.opacity = '1';
                    document.querySelector('.hero-btn').style.transform = 'translateY(0)';
                }, 200);
            }, 200);
        }, 200);
    }, 300);
    
    // Scroll Animation
    const animateOnScroll = function() {
        const elements = [
            '.section-title',
            '.service-intro',
            '.service-card',
            '.about-image',
            '.about-content',
            '.pricing-table',
            '.contact-info',
            '.contact-form'
        ];
        
        elements.forEach(selector => {
            const items = document.querySelectorAll(selector);
            
            items.forEach(item => {
                const itemPosition = item.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (itemPosition < screenPosition) {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                    
                    if (selector === '.about-image') {
                        item.style.transform = 'translateX(0)';
                    }
                    
                    if (selector === '.about-content') {
                        item.style.transform = 'translateX(0)';
                    }
                }
            });
        });
    };
    
    // Run on load
    animateOnScroll();
    
    // Run on scroll
    window.addEventListener('scroll', animateOnScroll);
    
    // Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // ในตัวอย่างนี้เราจะแค่แสดง alert แต่ในการใช้งานจริงคุณควรส่งข้อมูลไปยัง server
            alert('ขอบคุณสำหรับข้อความ เราจะติดต่อกลับโดยเร็วที่สุด');
            contactForm.reset();
        });
    }
});

// เพิ่ม ripple effect เมื่อคลิกปุ่ม
const buttons = document.querySelectorAll('.hero-btn, .submit-btn');
buttons.forEach(button => {
    button.addEventListener('click', function(e) {
        const x = e.clientX - e.target.getBoundingClientRect().left;
        const y = e.clientY - e.target.getBoundingClientRect().top;
        
        const ripple = document.createElement('span');
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        ripple.className = 'ripple';
        
        this.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    });
});

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