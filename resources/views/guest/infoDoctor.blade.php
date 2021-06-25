@extends('layouts.homepage')

@section('pageTitle', 'doctors')

@section('content')

    <?php
        use App\Mark;
    ?>

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

@endsection
