@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')
        {{-- JUMBOTRON --}}
        <div class="jumbotron-small bg-image-3">

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
                <h1>2021</h1>
                <p>L'anno di nascita della nostra azienda.</p>
            </div>
            <div class="about_item">
                <h1>+ 3 milioni</h1>
                <p>I finanziamenti di chi ha creduto in noi.</p>
            </div>
            <div class="about_item">
                <h1>+ 800</h1>
                <p>I professionisti attivi nella nostra rete.</p>
            </div>
            <div class="about_item">
                <h1>+ 4000</h1>
                <p>Le famiglie che ci hanno già denunciato.</p>
            </div>
        </div> 

        <div class="about_main"> <!--deve occupare il 100% width -->
            <div class="about_submain">
                <div class="top_main"><!--deve occupare il 80% width -->
                    <h2 class="about_red">Come funziona?</h2>
                    <p>
                        Abbiamo una rete nazionale che oggi conta 800 professionisti attivi, tra medici, 
                        personale sanitario e assistenti domiciliari in 10 delle principali città italiane. 

                        <!-- Trigger/Open The Modal -->
                        <span class="about_green about_bold" id="triggerModal">Il nostro servizio è attivo 7 giorni su 7, dalle 8 alle 20.

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <iframe src="https://www.youtube.com/embed/3Oqyq7x7e9E?autoplay=1&controls=0" frameborder="0"></iframe>
                                </div>

                            </div>
                        </span>
                    </p> 
                </div>

                <div class="about_card_container">
                    <div class="about_card"> 
                        <div>
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <div>
                            <p class="about_uppercase about_padding">SCEGLI LA SOLUZIONE</p> <!-- uppercase -->
                        </div> 
                        <div>
                            <p>
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
                            <p class="about_uppercase about_padding">PRENOTA LA SEDUTA</p> <!-- uppercase -->
                        </div> 
                        <div>
                            <p>
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
                            <p class="about_uppercase about_padding">MIGLIORA LA TUA SALUTE</p> <!-- uppercase -->
                        </div> 
                        <div>
                            <p>
                                Rilassati e prenditi cura della tua salute o quella del tuo animale, 
                                a tutto il resto pensiamo noi. Ti affiancheremo durante tutto il percorso di cura, 
                                con un team di esperti disponibile 7 giorni su 7, anche in orario serale.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top_main">
                <h1 class="about_red">Il Team</h1>
            </div>
            <div class="top_main">
                <img src="img/info-graphic-26.png" alt="">
            </div>
            <div class="top_main">
                <h1 class="about_red">Sognatori, creativi e appassionati: vogliamo semplificare la sanità e renderla migliore per tutti.</h1>
                <h1>Siamo il primo poliambulatorio digitale in Italia</h1>
            </div>

            <div class="about_container">
                <div class="about_item_2">
                    <div>
                        <h3>An international remote working Team</h3>
                    </div>
                    <div>
                        <p>
                            Dopo Garibaldi e Mazzini anche TrueDoctors ha unificato l'Italia. <br>
                            Convinti che culture diverse contribuiscano ad arricchire le persone coinvolte. <br>
                            <span class="about_red">Lavora nel team persino uno di Potenza!</span> 
                        </p>
                    </div>
                </div>
                <div class="about_item_3">
                    <img src="img/info-graphic-27.png" alt="">
                </div>
            </div>
 
                <!-- Slideshow container -->
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
                </div>

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

                <div>
                    <i class="fab fa-facebook-square about_red"></i>
                    <i class="fab fa-instagram-square about_red"></i>
                    <i class="fab fa-linkedin about_red"></i>
                    <i class="fab fa-youtube about_red"></i>
                </div>

        </div>

    
@endsection