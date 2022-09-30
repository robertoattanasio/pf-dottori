@extends('layouts.dashboard')

@section('pageTitle', 'Payment')

@section('content')

    <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1>Pagamento</h1>
        </div>
        <div class="doctor-right-bottom-container relative">
            @if ($status->success == true)
                <div class="success">
                    <h3>Pagamento riuscito.</h3>
                    <a href="{{ route('dashboard-about') }}" class="margin-top-10">Torna alla dashboard.</a>
                </div>
            @else 
                <div class="success">
                    <h3>Errore pagamento.</h3>
                    <a href="{{ route('dashboard-about') }}" class="margin-top-10">Torna alla dashboard.</a>
                </div>
            @endif
        </div>

    </div>

@endsection
