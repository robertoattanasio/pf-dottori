@extends('layouts.dashboard')

@section('pageTitle', 'Dashboard')

@section('content')

    <?php include(app_path().'/Includes/counties.php'); ?>

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1>Il mio profilo</h1>
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
@endsection
