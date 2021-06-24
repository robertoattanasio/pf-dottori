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

            {{-- SECTION PAYMENTS --}}
            <section id="payments">
                <div class="payments-container">
                    <div class="payments-left-container">
                        <h3>Un Team Internazionale</h3>
                        {{-- PARAGRAPH --}}
                        <p class="generic margin-top-10">Prenota e paga in pochi click, in totale sicurezza: accettiamo carte di credito, bancomat e prepagate. Puoi inoltre effettuare pagamenti tramite bonifico per le spese superiori a 150€.</p>
                    </div>
                    <div class="payments-right-container">
                        <img src="img/info-graphic-27.png" alt="">
                    </div>

                </div>
            </section>

                {{-- <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 8</div>
                        <img src="img/carmine.jpeg">
                        <div class="text about_red">Carmine</div>
                    </div>
                
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 8</div>
                        <img src="img/alessio.jpeg">
                        <div class="text about_red">Alessio</div>
                    </div>
                
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 8</div>
                        <img src="img/roberto.jpeg">
                        <div class="text about_red">Roberto</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 8</div>
                        <img src="img/marco.jpeg">
                        <div class="text about_red">Marco</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">5 / 8</div>
                        <img src="img/omar.jpeg">
                        <div class="text about_red">Omar</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">6 / 8</div>
                        <img src="img/leonardo.jpeg">
                        <div class="text about_red">Leonardo</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">7 / 8</div>
                        <img src="img/salvatore.jpeg">
                        <div class="text about_red">Salvatore</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">8 / 8</div>
                        <img src="img/paolo.jpeg">
                        <div class="text about_red">Paolo</div>
                    </div>
                
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)"></a>
                    <a class="next" onclick="plusSlides(1)"></a>
                </div>
                <br>
                
                <!-- The dots/circles -->
                <div>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                    <span class="dot" onclick="currentSlide(8)"></span>
                </div> --}}

                <!-- SUBFOOTER -->
                <div class="about_container2">
                    <div>
                        <ul class="subfooter-ul">
                            <li>TrueDoctors</li>
                            <li>Domande frequenti</li>
                            <li>Psicologia On-line</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="subfooter-ul">
                            <li>Scopri di più</li>
                            <li>Tutte le recensioni</li>
                            <li>Rassegna stampa</li>
                            <li>Domande Frequenti</li>
                            <li>Magazine</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="subfooter-ul">
                            <li>Aspetti legali</li>
                            <li>Privacy Policy</li>
                            <li>Termini e condizioni</li>
                            <li>Cookie Policy</li>
                            <li>Avvertenza di rischio</li>
                        </ul>
                    </div>
                </div>

                <!-- SOCIAL FOOTER -->

                <div class="social-footer">
                    <i class="fab fa-facebook-square about_red"></i>
                    <i class="fab fa-instagram-square about_red"></i>
                    <i class="fab fa-linkedin about_red"></i>
                    <i class="fab fa-youtube about_red"></i>
                </div>

        </div>

    
@endsection