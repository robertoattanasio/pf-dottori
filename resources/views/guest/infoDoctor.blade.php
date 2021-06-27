@extends('layouts.homepage')

@section('pageTitle', 'Informazioni')

@section('content')

    <?php
        use App\Mark;
    ?>

        {{-- JUMBOTRON --}}
    <div class="jumbotron-small">

        {{-- JUMBOTRON WRAPPER --}}
        <div class="jumbotron-wrapper">

            {{-- JUMBOTRON LEFT CONTAINER --}}
            <div class="jumbotron-left-container">

                {{-- H2 TITLE --}}
                <h2>Informazioni</h2>
                
                {{-- PARAGRAPH --}}
                <p class="generic margin-top-10">Scopri tutti i dettagli del nostro specialista.</p>

                {{-- H3 SEARCH --}}
            </div>
            {{-- FINE JUMBOTRON LEFT CONTAINER --}}

            <div class="jumbotron-right-container">
                <img src="../img/info-graphic-1.png" alt="">
            </div>

        </div>
    </div>

    <div class="single-doctor-container">
        <div class="single-doctor-left-container">
            <div class="single-doctor-pic">
                @if ($user['profile_pic'])
                <img src="{{ asset('storage/'. $user['profile_pic']) }}">
                @else
                    <img src="..\img\medico_default.png" alt="">
                @endif
            </div>

        </div>

        <div class="single-doctor-right-container">
            <h3>{{$user['name']}} {{$user['surname']}}</h3>
        
            <div class="doctor-specialistic margin-top-10">
                @if($user->specializations)
                    @foreach ($user->specializations->toArray() as $specialization)
                        <p>&bull; {{$specialization['name']}}</p>
                    @endforeach
                @endif
            </div>

            <div class="doctor-info margin-top-10">
                <p>Indirizzo: {{$user['address']}} {{$user['street_number']}}, 
                    {{$user['city']}}, {{$user['county']}}</p>
                <p class="margin-top-10">Email: {{$user['email']}}</p>
                <p>Telefono: {{$user['phone_number']}}</p>

                @if($user['numero_recensioni'])
                <p class="margin-top-10"id="media_voti">Media voti: {{$user['media_voti']}}/5</p>
                <p id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</p>
                @endif
                    
                </div>
                
                <div class="doctor-buttons">
                    @if ($user['cv'])
                        <a class="btn-doctor-card" href="{{ asset('storage/'. $user['cv']) }}">Scarica il CV</a>
                    @endif
                    <a class="btn-doctor-card" href="{{route('contact-it', [$user['id']])}}">Contatta</a>
                    <a class="btn-doctor-card" href="{{route('review-it', [$user['id']])}}">Recensisci</a>
                </div>
                
                <div class="reviews-doctor">
                    @foreach ($reviews as $review)
                    <div class="review-doctor-card">
                        <p class="review-name">Scritto da: {{$review['name_patient']}}</p>
                        <p class="review-vote">Voto: {{Mark::where('id', $review['mark_id'])->first()['mark']}}/5</p>
                        <p class="review-date">Data: {{$review['created_at']}}</p>
                        <p class="review-text">{{$review['review_text']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
    <div class="info-doctor">

        
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
