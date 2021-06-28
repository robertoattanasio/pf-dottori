@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')

<?php include(app_path().'/Includes/counties.php'); ?>

    {{-- JUMBOTRON --}}
    <div class="jumbotron-big">

        {{-- JUMBOTRON WRAPPER --}}
        <div class="jumbotron-wrapper">

            {{-- JUMBOTRON LEFT CONTAINER --}}
            <div class="jumbotron-left-container">

                {{-- H2 TITLE --}}
                <h2>Visite a domicilio, videoconsulti e assistenza domiciliare</h2>
                
                {{-- PARAGRAPH --}}
                <p class="generic margin-top-10">Prenota in pochi clic servizi sanitari e socio-assistenziali, 7 giorni su 7, senza liste d'attesa.</p>

                {{-- H3 SEARCH --}}
                <h4 class="margin-top-80">Scopri i nostri servizi a domicilio</h4>

                {{-- SEARCH --}}
                <form class="margin-top-20" enctype="multipart/form-data" method="POST" action="{{ route('filter-specialization') }}">
                    @csrf
                        <select class="index-select" name="specialization">
                            @foreach ($specializations as $specialization)
                                <option value="{{$specialization}}">{{$specialization}}</option>
                            @endforeach
                        </select>
            
                        <button class="search-btn" type="submit">
                            {{ __('Ricerca') }}
                        </button>
                </form>
            </div>
            {{-- FINE JUMBOTRON LEFT CONTAINER --}}

            <div class="jumbotron-right-container">
                <img src="img/info-graphic-1.png" alt="">
            </div>

        </div>
    </div>

    {{-- DOCTOR CONTAINER --}}
    @if($sponsorized_users)
        <div class="doctors-container">
            <h3>I nostri specialisti di punta</h3>
            {{-- PARAGRAPH --}}
            <p class="generic margin-top-10">Prenota in pochi clic servizi sanitari e socio-assistenziali, 7 giorni su 7, senza liste d'attesa.</p>

            {{-- DOCTOR SCROLL HORIZONTAL --}}
            <div class="doctors-scroll-container">

                @foreach ($sponsorized_users as $user)
                    {{-- DOCTOR CARD --}}
                    <div class="doctor-card {{$user['county']}}">

                        {{-- DOCTOR CARD PHOTO --}}
                        <div class="doctor-card-pic">
                            @if ($user['profile_pic'])
                                <img src="{{ asset('storage/'. $user['profile_pic']) }}">
                            @else 
                                <img src="img\medico_default.png" alt="">
                            @endif
                        </div>

                        {{-- DOCTOR CARD INFO --}}
                        <div class="doctor-card-info margin-top-20">
                            <span id="name">{{$user['name']}}</span>
                            <span id="surname">{{$user['surname']}}</span>
                            <div class="margin-top-10" id="county">{{$user['county']}}</div>
                        </div>

                        {{-- DOCTOR CARD SPECIALISTIC --}}
                        <div class="doctor-card-specialistic margin-top-10">
                            <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        {{-- DOCTOR CARD VOTES --}}
                        <div class="doctor-card-votes margin-top-10">
                            @if($user['numero_recensioni'])
                                <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>

                                <div id="media_voti">Media voti: {{round($user['media_voti'], 1)}}/5</div>
                            @endif
                        </div>

                        {{-- DOCTOR CARD BUTTON DETAILS --}}
                        <a class="btn-doctor-info margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                        
                    </div>
                    {{-- FINE DOCTOR CARD --}}
                @endforeach
            </div>
            {{-- FINE DOCTOR SCROLL HORIZONTAL --}}
        </div>
    @endif
    {{-- DOCTOR CONTAINER --}}

    {{-- SECTION PAYMENTS --}}
    <section id="payments">
        <div class="payments-container">
            <div class="payments-left-container">
                <h3>Paga comodamente online in modo semplice e sicuro</h3>
                {{-- PARAGRAPH --}}
                <p class="generic margin-top-10">Prenota e paga in pochi click, in totale sicurezza: accettiamo carte di credito, bancomat e prepagate. Puoi inoltre effettuare pagamenti tramite bonifico per le spese superiori a 150€.</p>
            </div>
            <div class="payments-right-container">
                <img src="img/info-graphic-6.png" alt="">
            </div>

        </div>
    </section>

    {{-- FINE SECTION PAYMENTS --}}

    {{-- SECTION BANNER --}}
    <section id="banner">
        <div class="banner-container">
            <h2 class="banner">Vogliamo rendere la sanità<br>
                più semplice, rapida e su misura.</h2>
        </div>
    </section>

    {{-- FINE SECTION BANNER --}}

    {{-- SECTION COLLABORATE --}}
    <section id="collaborate">
        <div class="collaborate-wrapper">
            <h3>Sei un medico o un professionista sanitario?</h3>
            {{-- PARAGRAPH --}}
            <p class="generic margin-top-10">Lavoriamo solo con personale qualificato e certificato, capace di rispondere a precisi criteri di selezione.<br>Il nostro obiettivo è garantirti un servizio con elevati standard di qualità.<br><br>Con noi la tua salute è nelle mani dei migliori professionisti!</p>
            <a href="{{ route('register') }}"><button class="margin-top-40 collaborate">Collaboriamo</button></a>
        </div>
    </section>
    {{-- FINE SECTION COLLABORATE --}}

    <script>

        var navFixedTop = document.querySelector('header');

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