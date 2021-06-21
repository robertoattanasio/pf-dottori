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
                <div class="card_message relative">
                    <h4><span>mittente: </span> {{ $message['name_patient'] }} {{ $message['surname_patient'] }}</h4>
                    <p><span>email: </span> {{ $message['email_patient'] }}</p>
                    <p><span>data: </span> {{ substr($message['created_at'], 0, 10) }}</p>
                    <p id="message_details"><a href="{{ route('info-message', [$message['email_patient']]) }}"><i
                                class="far fa-envelope"></i></a></p>
                </div>
            @endforeach
        </div>

        {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
    </div>
    {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
