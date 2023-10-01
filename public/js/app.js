const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuBtnOpen = document.getElementById("mobile-menu-btn-open");
const mobileMenuBtnClose = document.getElementById("mobile-menu-btn-close");

const toggleMobileMenu = () => {
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("animate__slideInDown");
    mobileMenuBtnOpen.classList.toggle("lg:hidden");
    mobileMenuBtnClose.classList.toggle("hidden");
};

