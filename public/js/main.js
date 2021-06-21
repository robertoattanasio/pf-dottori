window.addEventListener('scroll', function() {
    let navFixedTop = document.querySelector('header');
    navFixedTop.classList.toggle('nav_scrollOverHeader', window.scrollY > 10);

    // let toTopBtn = document.querySelector('.fixed_buttons_toTop');
    // toTopBtn.classList.toggle('toTop_scrollOverHeader', window.scrollY > 570);
})