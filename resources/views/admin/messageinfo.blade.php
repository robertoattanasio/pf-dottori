@extends('layouts.dashboard')

@section('pageTitle', 'Messaggi')

@section('content')

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1>I tuoi messaggi</h1>
            </div>
            <div class="doctor-right-bottom-container">
                <h4>da {{$message['name_patient']}} {{$message['surname_patient']}}</h4>
                <p>Email: {{$message['email_patient']}}</p>
                <p>Messaggio:</p>
                <p>{{$message['text_patient']}}</p>
                <span>Data invio: {{$message['created_at']}}</span>

                <form action="{{ route('message-sent') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-auth-item">
                        <label for="email_patient">{{ __('email paziente') }}</label>
            
                        <div class="auth-item-input">
                            <input id="email_patient" type="text" name="email_patient" required autocomplete="email_patient" autofocus value="{{ $message['email_patient'] }}">
                        </div>
                    </div>
            
                    <div class="form-auth-item">
                        <label for="answer">{{ __('risposta') }}</label>
            
                        <div class="auth-item-input">
                            <input id="answer" type="text" name="answer" required autocomplete="answer" autofocus>
                        </div>
                    </div>
            
                    <button type="submit">
                        {{ __('Rispondi') }}
                    </button>
            
                </form>
    
            </div>        

            {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
