@extends('layouts.homepage')

@section('pageTitle', 'Ricerca Dottori')

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
                <h4 class="margin-top-80">I nostri dottori per tutte le tue esigenze</h4>

                <div class="search-container margin-top-30">
                    <select id="countySelect" class="index-select">
                        <option value="Tutti">Tutte le città</option>

                        @foreach ($counties_name as $county_name)
                            <option value="{{$county_name}}">{{$county_name}}</option>
                        @endforeach
                    </select>

                    <div class="search-container margin-top-10">
                        <select id="markSelect" class="index-select">
                            <option value="0">Tutti i voti</option>

                            <option value="4">>=4</option>
                            <option value="3">>=3</option>
                        </select>
                    </div>
        
                    <div class="search-container margin-top-10">
                        <select id="reviewSelect" class="index-select">
                            <option value="0">Tutte le recensioni</option>

                            <option value="5">>=5</option>
                            <option value="2">>=2</option>
                        </select>   
                    </div>

                    <button id="search_doctors" class="search-btn margin-top-30">Ricerca</button>

                </div>

            </div>
            {{-- FINE JUMBOTRON LEFT CONTAINER --}}

            <div class="jumbotron-right-container">
                <img src="img/info-graphic-1.png" alt="">
            </div>

        </div>
    </div>

    <div class="doctors-container">
        <div class="doctors-scroll-container">

            @if (count($users) == 0)

                <p class="no-doctors">Non ci sono dottori<br>che soddisfano i tuoi requisiti.</p>

                @else

                @foreach ($users as $user)
                    {{-- DOCTOR CARD --}}
                    <div class="doctor-card {{$user['county']}}" value="[{{$user['media_voti']}}, {{$user['numero_recensioni']}}]">

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
                            {{-- <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul> --}}
                        </div>

                        {{-- DOCTOR CARD VOTES --}}
                        <div class="doctor-card-votes margin-top-10">
                            @if($user['numero_recensioni'])
                                <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>

                                <div id="media_voti">Media voti: {{$user['media_voti']}}/5</div>
                            @endif
                        </div>

                        {{-- DOCTOR CARD BUTTON DETAILS --}}
                        <a class="btn-doctor-info margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                        
                    </div>
                    {{-- FINE DOCTOR CARD --}}
                @endforeach
            @endif
        </div>
        {{-- FINE DOCTOR SCROLL HORIZONTAL --}}
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

        // QUESTA RIGA SERVE SE VUOI VEDERE IN CONSOLE LOG L'ARRAY USERS IN CONSOLELOG JAVASCRIPT
        // users = <?php echo json_encode($users) ?>;

        document.getElementById('search_doctors').addEventListener('click', function() {
            var county_selected = document.getElementById('countySelect').value;
            var review_selected = document.getElementById('reviewSelect').value;
            var mark_selected = document.getElementById('markSelect').value;
            // console.log(mark_selected);
            // console.log(review_selected);
            var none = document.getElementsByClassName('doctor-card');

            if (county_selected == "Tutti") {
                // console.log('tutti');
                // console.log(county_selected);
                // console.log(none.length);

                for (i = 0; i < none.length; i++) {
                    none[i].classList.add("none");
                }

                for (j = 0; j < none.length; j++) {

                    if (JSON.parse(none[j].getAttribute('value'))[0] >= mark_selected && JSON.parse(none[j].getAttribute('value'))[1] >= review_selected) {
                    none[j].classList.remove("none");
                    }

                }

            } else if (document.getElementsByClassName(county_selected)) {

                for (i = 0; i < none.length; i++) {
                    none[i].classList.add("none");
                }

                var block = document.getElementsByClassName(county_selected);
                // console.log(block);

                for (ii = 0; ii < block.length; ii++) {
                    // console.log(JSON.parse(block[ii].getAttribute('value'))[0]);
                    if (JSON.parse(block[ii].getAttribute('value'))[0] >= mark_selected && JSON.parse(block[ii].getAttribute('value'))[1] >= review_selected) {
                        block[ii].classList.remove("none");
                    }
                }
            } 
        });

    </script>
@endsection
