@extends('layouts.dashboard')

@section('pageTitle', 'Dashboard')

@section('content')

    {{-- MAIN CONTAINER --}}
    <div class="container">
        {{-- DOCTOR LEFT CONTAINER --}}
        <div class="doctor-left-container">

            {{-- DOCTOR ICONS --}}
            <div class="doctor-icons">
                <a href="{{ route('index') }}"><i class="fas fa-home"></i></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>

                    
                    
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
                    <h2>{{Auth::user()->name}} {{Auth::user()->surname}}</h2>
                </div>
            </div>

            {{-- DOCTOR-MENU --}}
            <div class="doctor-menu">
                <ul>
                    <li><a href="">Il Mio Profilo</a></li>
                    <li><a href="">Recensioni</a></li>
                    <li><a href="">Messaggi</a></li>
                    <li><a href="">Statistiche</a></li>
                    <li><a href="{{ route('boost-profile') }}">Sponsorizzazioni</a></li>
                </ul>
            </div> 
        </div>
        {{-- FINE DOCTOR LEFT CONTAINER --}}

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <h2>{{Auth::user()->name}} {{Auth::user()->surname}}</h2>
            <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a>

            <a href="{{ route('edit-profile') }}">modifica profilo</a>
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
    </div>
@endsection