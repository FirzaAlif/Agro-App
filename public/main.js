// Count js

function startCount() {
  let valueDisplays = document.querySelectorAll(".num");
  let interval = 4000; // Durasi total animasi dalam milidetik

  valueDisplays.forEach((valueDisplay) => {
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endValue);
      let counter = setInterval(function() {
          startValue += 1;
          valueDisplay.textContent = startValue;
          if (startValue === endValue) {
              clearInterval(counter);
          }
      }, duration);
  });
}

// Memanggil fungsi untuk memulai penghitungan saat elemen terlihat
let hasStarted = false; // Untuk memastikan animasi hanya dipanggil sekali
window.addEventListener('scroll', function() {
  const countersSection = document.querySelector('.flex.justify-center.gap-10.mt-6'); // Ganti selector sesuai kebutuhan
  const sectionPosition = countersSection.getBoundingClientRect().top;

  if (!hasStarted && sectionPosition < window.innerHeight) {
      startCount();
      hasStarted = true; // Set flag agar tidak dijalankan lagi
  }
});
const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? "ri-menu-line" : "ri-close-line");

    if (isOpen) {
        // Tambahkan animasi close dan hapus class open setelah animasi selesai
        navLinks.classList.add("close");
        navLinks.addEventListener(
            "animationend", (e) => {
            navLinks.classList.remove("open");
            navLinks.classList.remove("close");
        }, { once: true });
    } else {
        // Buka menu
        navLinks.classList.add("open");
    }
});

navLinks.addEventListener("click", (e) => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-line")
});

const scrollRevealOption =  {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
};

ScrollReveal().reveal(".header__container .section__subheader", {
    ...scrollRevealOption,
});
ScrollReveal().reveal(".header__container .section__header", {
    ...scrollRevealOption,
    delay: 500,
});
ScrollReveal().reveal(".header__container .scroll__btn", {
    ...scrollRevealOption,
    delay: 1000,
});
ScrollReveal().reveal(".header__container .header__socials", {
    ...scrollRevealOption,
    origin: "left",
    delay: 1500,
});

ScrollReveal().reveal(".about__image-1, .about__image-3", {
    ...scrollRevealOption,
    origin: "right",
});
ScrollReveal().reveal(".about__image-2", {
    ...scrollRevealOption,
    origin: "left",
});
ScrollReveal().reveal(".about__content .section__subheader", {
    ...scrollRevealOption,
    delay: 500,
});
ScrollReveal().reveal(".about__content .section__header", {
    ...scrollRevealOption,
    delay: 1000,
});
ScrollReveal().reveal(".about__content p", {
    ...scrollRevealOption,
    delay: 1500,
});
ScrollReveal().reveal(".about__content .about__btn", {
    ...scrollRevealOption,
    delay: 2000,
});

//typed js
var options = {
    strings: ["Welcome To Agro Malang"],
    typeSpeed: 50, // Speed of typing
    backSpeed: 25, // Speed of backspacing (if needed)
    loop: true,   // Disable looping
    showCursor: true, // Show the cursor
    cursorChar: '|', // Customize the cursor character
  };

  var typed = new Typed("#typed", options);


