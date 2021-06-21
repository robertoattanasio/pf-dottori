@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')
         {{-- JUMBOTRON --}}
        <div class="jumbotron-small">

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

                <div class="jumbotron-right-container">
                    <img src="img/info-graphic-4.png" alt="">
                </div>

            </div>
        </div>

        <div class="about_container">
            <div class="about_item">
                <h1>2021</h1>
                <p>L'anno di nascita della nostra azienda.</p>
            </div>
            <div class="about_item">
                <h1>+ 5 scemi</h1>
                <p>I cretini che ci hanno lavorato.</p>
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
                        <span class="about_green about_bold">Il nostro servizio è attivo 7 giorni su 7, dalle 8 alle 20.</span>
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

            <div>
                <h1 class="about_red">Il Team</h1>
            </div>
        </div>

    
@endsection