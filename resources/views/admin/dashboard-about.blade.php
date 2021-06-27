@extends('layouts.dashboard')

@section('pageTitle', 'Dashboard')

@section('content')

    <?php include app_path() . '/Includes/counties.php'; ?>

    {{-- DOCTOR RIGHT CONTAINER --}}
    <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1>Il mio profilo</h1>
        </div>
        <div class="doctor-right-bottom-container relative">
            <div class="personal_info">
                @if (count(Auth::user()->specializations) > 0)
                    <div class="card_info">
                        <h4><span>Nome: </span> {{ Auth::user()->name }} {{ Auth::user()->surname }}</h4>
                    </div>
                    <div class="card_info">
                        <h4><span>Indirizzo: </span> {{ Auth::user()->address }}, {{ Auth::user()->street_number }}</h4>
                    </div>
                    <div class="card_info">
                        <h4><span>Città: </span> {{ Auth::user()->city }}</h4>
                    </div>
                    <div class="card_info">
                        <h4><span>Provincia: </span> {{ Auth::user()->county }}</h4>
                    </div>
                    <div class="card_info">
                        <h4><span id="email">Email: </span> {{ Auth::user()->email }}</h4>
                    </div>
                    <div class="card_info">
                        <h4><span>Telefono: </span>+39 {{ Auth::user()->phone_number }}</h4>
                    </div>

                    <a class="margin-top-20" href="{{route('infoDoctor', [Auth::user()->id])}}"><i class="far fa-user"></i><i class="fas fa-chevron-right"></i><i class="fas fa-globe"></i></a>
                @else 
                    <p>Per visualizzare tutti i tuoi dati ed essere visibile nella sezione ricerca dottore, completa il tuo profilo, inserendo la tua specializzazione nella sezione 'modifica'.</p>
                @endif
            </div>

        </div>

    </div>
    {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
