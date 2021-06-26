@extends('layouts.homepage')

@section('pageTitle', 'Psicologia Online')

@section('content')

{{-- Jumbotron --}}
<div class="jumbotron-small bg-color-yellow">
    <div class="bg-image-2">
        <div class="container-faq">
            <div class="half-size">
                <h2>Psicologo online</h2>
                <p class="generic margin-top-10">Con TrueDoctors puoi consultare i migliori psicologi e psicoterapeuti comodamente online, 7 giorni su 7, da smartphone, pc o tablet.</p>
            </div>
        </div>
    </div>
</div>
{{-- /Jumbotron --}}

{{-- Copia di CHI SIAMO --}}

{{-- COME FUNZIONA --}}
<div class="psyco_main">
    <div class="about_submain">
        <div class="top_main">
            <h2 class="about_red">Psicologo online, come funziona</h2>
            <p class="generic margin-top-10">Il primo videoconsulto è gratuito</p> 
        </div>

        <div class="psyco_container">
            <div class="psyco_card bg-color-lightgrey"> 
                <div>
                    <img src="img/info-graphic-23.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top- margin-top-10">Compila il questionario</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Attraverso il questionario, potrai raccontarci di te e delle tue esigenze: noi ti assegneremo lo specialista più adatto per ritrovare armonia e serenità.
                    </p>
                </div>
                <div class="about_uppercase margin-top-30">
                    <a href="#">PRENOTA IL TUO PERCORSO</a>
                </div>
            </div>

            <div class="psyco_card bg-color-lightgrey"> 
                <div>
                    <img src="img/info-graphic-24.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top- margin-top-10">Prenota il videoconsulto gratuito</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Sei tu a scegliere quando ricevere il videoconsulto gratuito. In fase di prenotazione, seleziona data e orario che preferisci, noi lo comunicheremo al tuo terapeuta.
                    </p>
                </div>
                <div class="about_uppercase margin-top-30">
                    <a href="#">PRENOTA IL TUO PERCORSO</a>
                </div>
            </div>

            <div class="psyco_card bg-color-lightgrey"> 
                <div>
                    <img src="img/info-graphic-25.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top- margin-top-10">Inizia la terapia online</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Cliccando sul link che riceverai via mail potrai usufruire del primo videoconsulto gratuito. Accedi comodamente da smartphone, pc o tablet e parla con il professionista scelto apposta per te.
                    </p>
                </div>
                <div class="about_uppercase margin-top-30">
                    <a href="#">PRENOTA IL TUO PERCORSO</a>
                </div>
            </div>
        </div>
    </div>
    {{-- /COME FUNZIONA --}}
    
    {{-- CHE FACCIAMO--}}
    <div class="psyco_container bg-color-yellow">
        <div class="psyco_wrapper">
            <div class="psyco_left_container">
                <h3>I nostri psicologi online si occupano di </h3>
                {{-- PARAGRAPH --}}

                {{-- PROVA SUPER RISCHIOSA --}}
                <div class="psyco_mini_container">

                    {{-- Prima scheda --}}
                    <div class="psyco_card_mini card_shadow">
                        <div class="ms_position">
                            <div class="ms_layover">
                                <p class="generic">Ansia</p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>
                                <p class="generic psyco_green">Ansia</p>
                            </div> 
                            <div>
                                <p class="margin-top-10">
                                    paure, fobie, attacchi di panico, disturbi psicosomatici, ipocondria, insonnia, ansia sociale
                                </p>
                            </div>
                        </div>
                    </div>
                        
                    {{-- Seconda scheda --}}
                    <div class="psyco_card_mini card_shadow">
                        <div class="ms_position">
                            <div class="ms_layover">
                                <p class="generic">Terapia famigliare</p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>
                                <p class="generic psyco_green">Terapia famigliare</p>
                            </div> 
                            <div>
                                <p class="margin-top-10">
                                    conflittualità famigliari, disagi dell'età adolescenziale e pre-adolescenziale
                                </p>
                            </div>
                        </div>
                    </div>
                        
                    {{-- Terza scheda --}}
                    <div class="psyco_card_mini card_shadow">
                        <div class="ms_position">
                            <div class="ms_layover">
                                <p class="generic">Dipendenze</p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>
                                <p class="generic psyco_green">Dipendenze</p>
                            </div> 
                            <div>
                                <p class="margin-top-10">
                                    affettiva, alcol, droga, ludopatia, social network, videogiochi, sesso
                                </p>
                            </div>
                        </div>
                    </div>
                        
                    {{-- Quarta scheda --}}
                    <div class="psyco_card_mini card_shadow">
                        <div class="ms_position">
                            <div class="ms_layover">
                                <p class="generic">Depressione</p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>
                                <p class="generic psyco_green">Depressione</p>
                            </div> 
                            <div>
                                <p class="margin-top-10">
                                    lutto, divorzio, fine relazione, patologie, malattie oncologiche, malattie croniche
                                </p>
                            </div>
                        </div>
                    </div>
                        
                    {{-- Quinta scheda --}}
                    <div class="psyco_card_mini card_shadow">
                        <div class="ms_position">
                            <div class="ms_layover">
                                <p class="generic">Disturbo della personalità</p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>
                                <p class="generic psyco_green">Disturbo della personalità</p>
                            </div> 
                            <div>
                                <p class="margin-top-10">
                                    ossessivo-compulsivo, borderline, paranoide, schizoide, schizotipico, antisociale, istrionico, evitante, dipendente
                                </p>
                            </div>
                        </div>
                    </div>
                        
                    {{-- Sesta scheda --}}
                    <div class="psyco_card_mini card_shadow">
                        <div class="ms_position">
                            <div class="ms_layover">
                                <p class="generic">Disturbi alimentari</p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>
                                <p class="generic psyco_green">Disturbi alimentari</p>
                            </div> 
                            <div>
                                <p class="margin-top-10">
                                    anoressia, bulimia, fame compulsiva (binge eating)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="psyco_right_container">
                <img src="img/info-graphic-22.png" alt="">
            </div>
        </div>
    </div>
    {{-- /CHE FACCIAMO--}}

    {{-- TERAPIA SU MISURA --}}
    <div class="psyco_main">
    <div class="about_submain">
        <div class="top_main">
            <h2 class="about_red">Continua la terapia con un percorso su misura</h2>
            <p class="generic margin-top-10">Hai già effettuato il primo videoconsulto o vuoi continuare un percorso già iniziato?<br>Parla gratuitamente con un nostro tutor e scegli la soluzione più adatta alle tue esigenze.</p> 
        </div>

        <div class="psyco_container">

            {{-- Percorso Basic --}}
            <div class="psyco_card card_shadow">
                <div>
                    <h3>Basic</h3>
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Inizia il tuo percorso con due videosedute mensili.
                    </p>
                </div>
                <div>
                    <p class="generic margin-top-10">
                        Se stai affrontando un momento difficile e desideri confrontarti con uno specialista, questa soluzione fa per te.
                    </p>
                </div>
                <div>
                    <p class="generic margin-top-10">
                        <strong>100 Euro</strong>
                    </p>
                </div>
                <div>
                    <button>PARLA CON UN TUTOR</button>
                </div>
            </div>

            {{-- Percorso Plus --}}
            <div class="psyco_card card_shadow">
                <div>
                    <h3>Plus</h3>
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Inizia il tuo percorso con due videosedute mensili.
                    </p>
                </div>
                <div>
                    <p class="generic margin-top-10">
                        Se stai affrontando un momento difficile e desideri confrontarti con uno specialista, questa soluzione fa per te.
                    </p>
                </div>
                <div>
                    <p class="generic margin-top-10">
                        <strong>150 Euro</strong>
                    </p>
                </div>
                <div>
                    <button>PARLA CON UN TUTOR</button>
                </div>
            </div>

            {{-- Percorso standard --}}
            <div class="psyco_card card_shadow">
                <div>
                    <h3>Standard</h3>
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Inizia il tuo percorso con due videosedute mensili.
                    </p>
                </div>
                <div>
                    <p class="generic margin-top-10">
                        Se stai affrontando un momento difficile e desideri confrontarti con uno specialista, questa soluzione fa per te.
                    </p>
                </div>
                <div>
                    <p class="generic margin-top-10">
                        <strong>200 Euro</strong>
                    </p>
                </div>
                <div>
                    <button>PARLA CON UN TUTOR</button>
                </div>
            </div>
        </div>
    </div>

    {{-- /TERAPIA SU MISURA --}}

    {{-- TEST --}}
    <div class="psyco_container bg-color-lightgrey">
        <div class="psyco_wrapper">
            <div class="psyco_left_container">
                <h3>Ansia, stress, depressione?<br>Scoprilo con un test.</h3>
                <p class="generic margin-top-10">Irritabilità, tristezza, angoscia: è solo un momento o c'è qualcosa di più? <br> Analizza i sintomi con i nostri test e inizia un percorso su misura per recuperare serenità.</p>
            </div>
            <div class="psyco_right_container">
                <img src="img/info-graphic-15.png" alt="">
            </div>
        </div>
    </div>
    {{-- /TEST --}}

    {{-- VANTAGGI --}}
    <div class="psyco_main">
    <div class="about_submain">
        <div class="top_main">
            <h2 class="about_red">I vantaggi dello psicologo online</h2> 
        </div>

        <div class="psyco_container">
            <div class="psyco_card"> 
                <div class="img_container bg-color-lightgrey">
                    <img class="img_circle" src="img/info-graphic-21.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top-10">Dove vuoi, in totale sicurezza</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Accedi alla tua videoseduta dove e quando vuoi, da smartphone, pc o tablet. Il nostro servizio è strutturato a completa garanzia della tua privacy.
                    </p>
                </div>
            </div>

            <div class="psyco_card"> 
                <div class="img_container bg-color-lightgrey">
                    <img class="img_circle" src="img/info-graphic-20.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top-10">Evita scomodi spostamenti</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        TrueDoctors ti permette di accedere alle videosedute in modo semplice e rapido, ovunque tu sia, senza necessità di recarti nello studio del professionista.                    </p>
                </div>
            </div>

            <div class="psyco_card"> 
                <div class="img_container bg-color-lightgrey">
                    <img class="img_circle" src="img/info-graphic-19.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top-10">Paga comodamente online</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Con Truedoctors puoi prenotare e pagare comodamente da sito, in pochi clic e in totale sicurezza, con carta di credito, bancomat oppure prepagata.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- /VANTAGGI --}}

    {{-- RICHIEDI INFORMAZIONI --}}
    <div class="psyco_container bg-color-yellow">
        <div class="psyco_wrapper">
            <div class="psyco_left_container">
                <h3>Hai un dubbio sul servizio di psicologia e psicoterapia?</h3>
                {{-- PARAGRAPH --}}
                <p class="generic margin-top-10">Il nostro team sarà felice di fornirti tutte le informazioni necessarie per prenotare i servizi di EpiCura più adatti alle tue esigenze.</p>
            </div>
            <div class="psyco_right_container">
                <img src="img/info-graphic-14.png" alt="">
            </div>
        </div>
    </div>
    {{-- /RICHIEDI INFORMAZIONI --}}

    {{-- MIGLIORI PSICOLOGI --}}
        <div class="psyco_main">
    <div class="about_submain">
        <div class="top_main">
            <h2 class="about_red">I migliori psicologi online</h2>
            <p class="generic margin-top-10">Un servizio comodo, flessibile, affidabile</p> 
        </div>

        <div class="psyco_container">
            <div class="psyco_card"> 
                <div class="img_container bg-color-lightgreen">
                    <img class="img_circle" src="img/info-graphic-18.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top-10">Solo professionisti qualificati</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Verifichiamo nel dettaglio tutte le certificazioni acquisite e l’iscrizione all’Albo Ufficiale.
                    </p>
                </div>
            </div>

            <div class="psyco_card"> 
                <div class="img_container bg-color-lightgreen">
                    <img class="img_circle" src="img/info-graphic-17.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top-10">La tua soddisfazione è la nostra priorità</p>
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        Se non dovessi trovarti bene con il professionista, ti garantiamo la sostituzione senza costi aggiuntivi.
                    </p>
                </div>
            </div>

            <div class="psyco_card"> 
                <div class="img_container bg-color-lightgreen">
                    <img class="img_circle" src="img/info-graphic-16.png" alt="">
                </div>
                <div>
                    <p class="about_uppercase about_padding margin-top-10">Siamo sempre al tuo fianco</p> <!-- uppercase -->
                </div> 
                <div>
                    <p class="generic margin-top-10">
                        I nostri operatori sono attivi 7 giorni su 7 per offrirti un'assistenza su misura quando ne hai bisogno.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- /MIGLIORI PSICOLOGI --}}

        <!-- SOCIAL FOOTER -->

        <div class="social-footer">
            <i class="fab fa-facebook-square about_red"></i>
            <i class="fab fa-instagram-square about_red"></i>
            <i class="fab fa-linkedin about_red"></i>
            <i class="fab fa-youtube about_red"></i>
        </div>

</div>

{{-- /Copia di CHI SIAMO --}}

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