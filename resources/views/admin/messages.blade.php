@extends('layouts.dashboard')

@section('pageTitle', 'Messaggi')

@section('content')

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1>I tuoi messaggi</h1>
            </div>
            <div class="doctor-right-bottom-container">
                @foreach ($messages as $message)
                    <div class="card_message">
                        {{-- @dd($message) --}}
                        <h4>da {{$message['name_patient']}} {{$message['surname_patient']}}</h4>
                        <p>Email: {{$message['email_patient']}}</p>
                        <span>Data invio: {{$message['created_at']}}</span>
                        <a href="{{ route('info-message', [$message['email_patient']]) }}">Visualizza messaggio</a>
                    </div>
                @endforeach
            </div>

            {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
