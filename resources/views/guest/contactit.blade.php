@extends('layouts.homepage')

@section('pageTitle', 'contact-it')

@section('content')
contatta {{$id}} inserendo i tuoi dati e il messaggio

    <form action="{{route('return-contact-it', [$id])}}" method="post">
        @csrf
        @method('GET')

        <div class="form-auth-item">
            <label for="name_patient">{{ __('nome') }}</label>

            <div class="auth-item-input">
                <input id="name_patient" type="text" name="name_patient" required autocomplete="name_patient" autofocus>
            </div>
        </div>

        <div class="form-auth-item">
            <label for="surname_patient">{{ __('cognome') }}</label>

            <div class="auth-item-input">
                <input id="surname_patient" type="text" name="surname_patient" required autocomplete="surname_patient" autofocus>
            </div>
        </div>

        <div class="form-auth-item">
            <label for="email_patient">{{ __('email') }}</label>

            <div class="auth-item-input">
                <input id="email_patient" type="text" name="email_patient" required autocomplete="email_patient" autofocus>
            </div>
        </div>

        <div class="form-auth-item">
            <label for="text_patient">{{ __('messaggio') }}</label>

            <div class="auth-item-input">
                <input id="text_patient" type="text" name="text_patient" required autocomplete="text_patient" autofocus>
            </div>
        </div>


        <button type="submit">
            {{ __('Contatta') }}
        </button>

    </form>

@endsection