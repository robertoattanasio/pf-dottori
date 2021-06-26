@extends('layouts.homepage')

@section('pageTitle', 'doctors')

@section('content')

    <?php
        use App\Mark;
    ?>

        {{-- JUMBOTRON FAQ --}}
        <div class="jumbotron-small">
            <div class="bg-image">
                <div class="container-faq">
                    <div class="half-size">
                        <h2>{{$user['name']}} {{$user['surname']}}</h2>
                        <p class="generic margin-top-10">Scopri tutte le informazioni del nostro specialista.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- /JUMBOTRON FAQ --}}

    <div class="info_doctor">
        @if ($user['profile_pic'])
            <img style="width: 100px;" src="{{ asset('storage/'. $user['profile_pic']) }}">
        @else
            <img src="..\img\medico_default.png" alt="">
        @endif
        <h2>{{$user['name']}} {{$user['surname']}}</h2>
        
        @if($user->specializations)
        @foreach ($user->specializations->toArray() as $specialization)
            <p class="specialistica">{{$specialization['name']}}</p>
        @endforeach
        @endif

        @if ($user['cv'])
            <a href="{{ asset('storage/'. $user['cv']) }}">Scarica il CV del dottore</a>
        @endif

        <p>Indirizzo: {{$user['address']}} {{$user['street_number']}}, 
            {{$user['city']}}, {{$user['county']}}</p>
        <div class="contatti">
            <p>Contatti:</p>
            <ul>
                <li>Email: {{$user['email']}}</li>
                <li>Telefono: {{$user['phone_number']}}</li>
            </ul>
        </div>
        @if($user['numero_recensioni'])
        <p id="media_voti">Media voti: {{$user['media_voti']}}</p>
        <p id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</p>
        @endif


        <button><a href="{{route('contact-it', [$user['id']])}}">Contatta</a></button>
        <button><a href="{{route('review-it', [$user['id']])}}">Recensisci</a></button>
    </div>

    <div class="reviews_doctor">
        @foreach ($reviews as $review)
            <div class="card_reviews">
                <h4>{{$review['name_patient']}}</h4>
                <p>{{$review['review_text']}}</p>
                <p>Voto: {{Mark::where('id', $review['mark_id'])->first()['mark']}}</p>
                <p>Scritta in data: {{$review['created_at']}}</p>
            </div>
        @endforeach
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
