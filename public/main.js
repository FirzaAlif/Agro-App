const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {
    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? "ri-menu-line" : "ri-close-line");

    if (isOpen) {
        // Tambahkan animasi close dan hapus class open setelah animasi selesai
        navLinks.classList.add("close");
        navLinks.addEventListener("animationend", () => {
            navLinks.classList.remove("open");
            navLinks.classList.remove("close");
        }, { once: true });
    } else {
        // Buka menu
        navLinks.classList.add("open");
    }
});

navLinks.addEventListener("click", () => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-line")
});

const scrollRevealOption =  {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
};

ScrollReveal().reveal(".header_container .section_subheader", {
    ...scrollRevealOption,
});
ScrollReveal().reveal(".header_container .section_header", {
    ...scrollRevealOption,
    delay: 500,
});
ScrollReveal().reveal(".header_container .section_btn", {
    ...scrollRevealOption,
    delay: 1000,
});
ScrollReveal().reveal(".header_container .section_header", {
    ...scrollRevealOption,
    origin: "left",
    delay: 1500,
});

