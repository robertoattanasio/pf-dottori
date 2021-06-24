@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')
    <div class="jumbotron-small bg-color-yellow">
        <div class="bg-image-2">
            <div class="container-faq">
                <div class="half-size">
                    <h2>Psicologo e Psicoterapeuta online</h2>
                    <p class="generic margin-top-10">Con EpiCura puoi consultare i migliori psicologi e psicoterapeuti comodamente online, 7 giorni su 7, da smartphone, pc o tablet.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
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
        })
    </script>
@endsection