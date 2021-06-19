@extends('layouts.homepage')

@section('pageTitle', 'doctors')

@section('content')

<div class="info_doctor">
    <img src="{{ asset('storage/' . $user['profile_pic']) }}" alt="">
    <h2>{{$user['name']}} {{$user['surname']}}</h2>
    <p>Indirizzo: {{$user['address']}} {{$user['street_number']}}, 
        {{$user['city']}}, {{$user['county']}}</p>
    <div class="contatti">
        <p>Contatti:</p>
        <ul>
            <li>Email: {{$user['email']}}</li>
            <li>Telefono: {{$user['phone_number']}}</li>
        </ul>
    </div>

    <button><a href="{{route('contact-it', [$user['id']])}}">Contatta</a></button>
    <button><a href="{{route('review-it', [$user['id']])}}">Recensisci</a></button>
</div>

@endsection
