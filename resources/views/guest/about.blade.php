@extends('layouts.homepage')

@section('pageTitle', 'Chi Siamo')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="jumbotron-small bg-image-3 bg-color-lightblue">

        {{-- JUMBOTRON WRAPPER --}}
        <div class="jumbotron-wrapper">

            {{-- JUMBOTRON LEFT CONTAINER --}}
            <div class="jumbotron-left-container">

                {{-- H2 TITLE --}}
                <h2>Il primo centro medico digitale in Italia</h2>
                
                {{-- PARAGRAPH --}}
                <p class="generic margin-top-10">Rendiamo la sanità più semplice, rapida e attenta ai bisogni delle persone.</p>
                
            </div>
            {{-- FINE JUMBOTRON LEFT CONTAINER --}}

        </div>
    </div>

    <div class="about_container">
        <div class="about_item">
            <h3>2021</h3>
            <p class="generic margin-top-10">L'anno di nascita della nostra azienda.</p>
        </div>
        <div class="about_item">
            <h3>+ 3M</h3>
            <p class="generic margin-top-10">I finanziamenti di chi ha creduto in noi.</p>
        </div>
        <div class="about_item">
            <h3>+ 800</h3>
            <p class="generic margin-top-10">I professionisti attivi nella nostra rete.</p>
        </div>
        <div class="about_item">
            <h3>+ 4000</h3>
            <p class="generic margin-top-10">Le famiglie che ci hanno già denunciato.</p>
        </div>
    </div> 

    <div class="about_main">
        <div class="about_submain">
            <div class="top_main">
                <h2 class="about_red">Come funziona?</h2>
                <p class="generic margin-top-10">
                    Abbiamo una rete nazionale che oggi conta 800 professionisti attivi, tra medici, 
                    personale sanitario e assistenti domiciliari in 10 delle principali città italiane. 

                    <div class="about_green about_bold margin-top-10" id="triggerModal">Il nostro servizio è attivo 7 giorni su 7, dalle 8 alle 20.
                    </div>
                </p> 
            </div>

            <div class="about_card_container">
                <div class="about_card"> 
                    <div>
                        <i class="fas fa-notes-medical"></i>
                    </div>
                    <div>
                        <p class="about_uppercase about_padding margin-top- margin-top-10">SCEGLI LA SOLUZIONE</p> <!-- uppercase -->
                    </div> 
                    <div>
                        <p class="generic margin-top-10">
                            Offriamo un’ampia scelta di servizi sanitari per rispondere esattamente 
                            a ciò di cui hai bisogno. Se hai un problema e non sai a chi rivolgerti, 
                            il nostro team di esperti ti aiuterà ad individuare la soluzione più adatta a te.
                        </p>
                    </div>
                </div>

                <div class="about_card"> 
                    <div>
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div>
                        <p class="about_uppercase about_padding margin-top- margin-top-10">PRENOTA LA SEDUTA</p> <!-- uppercase -->
                    </div> 
                    <div>
                        <p class="generic margin-top-10">
                            Contattaci o prenota direttamente online. Noi troveremo per te il miglior 
                            professionista che faccia al caso tuo che ti guiderà durante l’intero percorso 
                            terapeutico. Riceverai il servizio direttamente a casa, senza liste d’attesa.
                        </p>
                    </div>
                </div>

                <div class="about_card"> 
                    <div>
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div>
                        <p class="about_uppercase about_padding margin-top- margin-top-10">PER LA TUA SALUTE</p> <!-- uppercase -->
                    </div> 
                    <div>
                        <p class="generic margin-top-10">
                            Rilassati e prenditi cura della tua salute o quella del tuo animale, 
                            a tutto il resto pensiamo noi. Ti affiancheremo durante tutto il percorso di cura, 
                            con un team di esperti disponibile 7 giorni su 7, anche in orario serale.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="top_main">
            <img src="img/info-graphic-26.png" alt="">
        </div>

        {{-- SECTION BANNER --}}
        <section id="banner">
            <div class="banner-container">
                <h2 class="banner">Sognatori, creativi e appassionati.<br>Vogliamo semplificare la sanità e renderla migliore per tutti.</h2>
            </div>
        </section>

        {{-- SLIDESHOW --}}
        <section id="sliderTeam">
            <div class="slider-container">
                <i class="fas fa-chevron-left arrowLeft"></i>
                <div class="image-container">       
                    <img class="sliderImg" src="" alt="">
                </div>
                <i class="fas fa-chevron-right arrowRight"></i>
            </div>
            <p class="sliderName"></p>
        </section>

        {{-- SECTION COPIA DI PAYMENTS --}}
        <section id="payments">
            <div class="payments-container">
                <div class="payments-left-container">
                    <h3>Un Team Internazionale</h3>
                    {{-- PARAGRAPH --}}
                    <p class="generic margin-top-10">Prenota e paga in pochi click, in totale sicurezza: accettiamo carte di credito, bancomat e prepagate. Puoi inoltre effettuare pagamenti tramite bonifico per le spese superiori a 150€.</p>
                </div>
                <div class="payments-right-container">
                    <img name="slider" src="img/info-graphic-27.png" alt="">
                </div>

            </div>
        </section>
        
            <!-- SOCIAL FOOTER -->
            <div class="social-footer">
                <i class="fab fa-facebook-square about_red"></i>
                <i class="fab fa-instagram-square about_red"></i>
                <i class="fab fa-linkedin about_red"></i>
                <i class="fab fa-youtube about_red"></i>
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

        // SLIDESHOW
        var sliderStart = 0;
        var images = [{
                name: 'Alessio Pretelli',
                link: 'img/team/alessio.png'
            },
            {
                name: 'Carmine Bonavoglia',
                link: 'img/team/carmine.png'
            }, {
                name: 'Marco Lepore',
                link: 'img/team/marco.jpeg'
            }, {
                name: 'Roberto Attanasio',
                link: 'img/team/roberto.jpeg'
            }, {
                name: 'Omar D\'Amico',
                link: 'img/team/omar.png'
            },
        ];
        var sliderArrowLeft = document.querySelector('.arrowLeft');
        var sliderArrowRight = document.querySelector('.arrowRight');

        var sliderTeam = document.querySelector('.sliderImg');
        sliderTeam.src = images[sliderStart].link;
        var sliderName = document.querySelector('.sliderName');
        sliderName.innerHTML = images[sliderStart].name;

        sliderArrowLeft.addEventListener('click', function() {
            sliderStart--;
            if (sliderStart < 0) {
                sliderStart = images.length - 1;
                sliderTeam.src = images[sliderStart].link;
                sliderName.innerHTML = images[sliderStart].name;
            } else {
                sliderTeam.src = images[sliderStart].link;
                sliderName.innerHTML = images[sliderStart].name;
            }
        });

        sliderArrowRight.addEventListener('click', function() {
            sliderStart++;
            if (sliderStart > 4) {
                sliderStart = 0;
                sliderTeam.src = images[sliderStart].link;
                sliderName.innerHTML = images[sliderStart].name;
            } else {
                sliderTeam.src = images[sliderStart].link;
                sliderName.innerHTML = images[sliderStart].name;
            }
        });
    </script>
@endsection