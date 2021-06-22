var navFixedTop = document.querySelector('header');


var body = document.getElementById('mainBody');
var btnMobileMenu = document.querySelector('.hamburger');
var menuMobile = document.querySelector('.menu-mobile');



// APERTURA MOBILE MENU
btnMobileMenu.addEventListener('click', function() {
    btnMobileMenu.classList.toggle('active');
    if (btnMobileMenu.classList.contains('active')) {
        menuMobile.style.transform = "translateY(-0%)";
        body.style.overflow = "hidden";

    } else {
        menuMobile.style.transform = "translateY(-100%)";
        body.style.overflow = "auto";
    }

})


// ATTIVAZIONE BOX_SHADOW DELLA NAVBAR ON SCROLL
window.addEventListener('scroll', function() {
    navFixedTop.classList.toggle('nav_scrollOverHeader', window.scrollY > 10);

    // let toTopBtn = document.querySelector('.fixed_buttons_toTop');
    // toTopBtn.classList.toggle('toTop_scrollOverHeader', window.scrollY > 570);
})