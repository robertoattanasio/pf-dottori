@extends('layouts.card')

@section('pageTitle', 'Contatta il dottore')

@section('content')

    {{-- ICONE HOME E BACK --}}
    <div class="doctor-icons">
        <a href="{{ route('infoDoctor', [$id]) }}"><i class="fas fa-home"></i></a>
    </div>


    {{-- FORM HEADER --}}
    <div class="card-header">Contatta il dottore</div>

    {{-- FORM --}}
    <form class="form-auth" action="{{route('return-contact-it', [$id])}}" method="post">
        @csrf
        @method('GET')

        {{-- FORM ITEM --}}
        <div class="form-auth-item">
            <label for="name_patient">{{ __('Nome') }}</label>

            <div class="auth-item-input">
                <input id="name_patient" type="text" name="name_patient" required autocomplete="name_patient" autofocus>
            </div>
        </div>

        {{-- FORM ITEM --}}
        <div class="form-auth-item">
            <label for="surname_patient">{{ __('Cognome') }}</label>

            <div class="auth-item-input">
                <input id="surname_patient" type="text" name="surname_patient" required autocomplete="surname_patient" autofocus>
            </div>
        </div>

        {{-- FORM ITEM --}}
        <div class="form-auth-item">
            <label for="email_patient">{{ __('Email') }}</label>

            <div class="auth-item-input">
                <input id="email_patient" type="text" name="email_patient" required autocomplete="email_patient" autofocus>
            </div>
        </div>

        {{-- FORM ITEM --}}
        <div class="form-auth-item">
            <label for="text_patient">{{ __('Messaggio') }}</label>

            <div class="auth-item-input">
                <textarea class="message" id="text_patient" type="text" name="text_patient" required autocomplete="text_patient" autofocus></textarea>
            </div>
        </div>

        {{-- FORM ITEM --}}
        <div class="form-auth-item">
            <button class="button-auth margin-top-10" type="submit">
                {{ __('Contatta') }}
            </button>
        </div>

    </form>

@endsection