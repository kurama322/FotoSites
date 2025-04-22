
const imageList = document.querySelector(".image-list");
const slideButtons = document.querySelectorAll(".slide-button");
const imageItems = document.querySelectorAll(".image-item");

const slideAmount = imageItems[0].offsetWidth + 16; // ширина + gap між фото

// Обробка натискання кнопок
slideButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const direction = button.id === "prev-slide" ? -1 : 1;
    const newScrollLeft = imageList.scrollLeft + direction * slideAmount;
    const maxScroll = imageList.scrollWidth - imageList.clientWidth;

    // Якщо кінець — повертайся на початок
    if (newScrollLeft >= maxScroll - 5 && direction === 1) {
      imageList.scrollTo({ left: 0, behavior: "smooth" });
    }
    // Якщо початок — стрибай на кінець
    else if (newScrollLeft <= 0 && direction === -1) {
      imageList.scrollTo({ left: maxScroll, behavior: "smooth" });
    } else {
      imageList.scrollBy({ left: direction * slideAmount, behavior: "smooth" });
    }
  });
});

// Оновлення скролбару
const scrollbarThumb = document.querySelector(".scrollbar-thumb");
const scrollbarTrack = document.querySelector(".scrollbar-track");

const updateThumbPosition = () => {
  const scrollLeft = imageList.scrollLeft;
  const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
  const thumbWidth = scrollbarTrack.clientWidth * (imageList.clientWidth / imageList.scrollWidth);
  const left = (scrollLeft / maxScrollLeft) * (scrollbarTrack.clientWidth - thumbWidth);
  scrollbarThumb.style.width = `${thumbWidth}px`;
  scrollbarThumb.style.transform = `translateX(${left}px)`;
};

imageList.addEventListener("scroll", updateThumbPosition);
window.addEventListener("resize", updateThumbPosition);
updateThumbPosition();

// Обробка свайпу пальцем
let startX, endX;

imageList.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
});

imageList.addEventListener("touchmove", (e) => {
  endX = e.touches[0].clientX;
});

imageList.addEventListener("touchend", () => {
  const direction = startX - endX > 50 ? 1 : endX - startX > 50 ? -1 : 0;
  
  if (direction !== 0) {
    const newScrollLeft = imageList.scrollLeft + direction * slideAmount;
    const maxScroll = imageList.scrollWidth - imageList.clientWidth;

    // Якщо кінець — повертайся на початок
    if (newScrollLeft >= maxScroll - 5 && direction === 1) {
      imageList.scrollTo({ left: 0, behavior: "smooth" });
    }
    // Якщо початок — стрибай на кінець
    else if (newScrollLeft <= 0 && direction === -1) {
      imageList.scrollTo({ left: maxScroll, behavior: "smooth" });
    } else {
      imageList.scrollBy({ left: direction * slideAmount, behavior: "smooth" });
    }
  }
});







  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const closeBtn = document.querySelector(".lightbox .close");
  const images = document.querySelectorAll(".image-item");

  images.forEach(img => {
    img.addEventListener("click", () => {
      lightbox.style.display = "flex";
      lightboxImg.src = img.src;
    });
  });

  closeBtn.addEventListener("click", () => {
    lightbox.style.display = "none";
    lightboxImg.src = "";
  });

  lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) {
      lightbox.style.display = "none";
      lightboxImg.src = "";
    }
  });




  document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll("[data-animate]");
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animated");
          observer.unobserve(entry.target); // прибираємо, якщо анімація 1 раз
        }
      });
    }, {
      threshold: 0.1
    });
  
    elements.forEach(el => observer.observe(el));
  });