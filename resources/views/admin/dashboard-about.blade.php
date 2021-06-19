@extends('layouts.dashboard')

@section('pageTitle', 'Dashboard')

@section('content')
    <?php
    $ilmioprofilo = 'il mio profilo';
    $recensioni = 'recensioni';
    $messaggi = 'messaggi';
    $statistiche = 'statistiche';
    $sponsorizzazioni = 'sponsorizzazioni';
    ?>
    {{-- MAIN CONTAINER --}}
    <div class="container">
        {{-- DOCTOR LEFT CONTAINER --}}
        <div class="doctor-left-container">

            {{-- DOCTOR ICONS --}}
            <div class="doctor-icons">
                <a href="{{ route('index') }}"><i class="fas fa-home"></i></a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fas fa-sign-out-alt"></i></a>
                <a href="{{ route('edit-profile') }}"><i class="fas fa-pen"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>

            {{-- DOCTOR-PIC --}}
            <div class="doctor-pic">
                <img src="{{ asset('storage/' . Auth::user()->profile_pic) }}">
            </div>

            {{-- DOCTOR-INFO --}}
            <div class="doctor-info">
                <div class="doctor-name">
                    <h2>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
                </div>
            </div>

            {{-- DOCTOR-MENU --}}
            <div class="doctor-menu">
                <ul>
                    <li><a href="">{{ $ilmioprofilo }}</a></li>
                    <li><a href="">{{ $recensioni }}</a></li>
                    <li><a href="">{{ $messaggi }}</a></li>
                    <li><a href="">{{ $statistiche }}</a></li>
                    <li><a href="{{ route('boost-profile') }}">{{ $sponsorizzazioni }}</a></li></a></li>
                </ul>
            </div>
        </div>
        {{-- FINE DOCTOR LEFT CONTAINER --}}

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1>{{ $ilmioprofilo }}</h1>
            </div>
            <div class="doctor-right-bottom-container">
                <h4><span>Nome: </span> {{ Auth::user()->name }} {{ Auth::user()->surname }}</h4>
                <h4><span>Indirizzo: </span> {{ Auth::user()->address }} {{ Auth::user()->street_number }}</h4>
                <h4><span>Città: </span> {{ Auth::user()->city }}</h4>
                <h4><span>Provincia: </span> {{ Auth::user()->county }}</h4>
                <h4><span>Email: </span> {{ Auth::user()->email }}</h4>
            </div>



            {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
    </div>
@endsection
