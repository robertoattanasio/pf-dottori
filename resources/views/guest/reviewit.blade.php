@extends('layouts.card')

@section('pageTitle', 'Recensisci il dottore')

@section('content')

    {{-- ICONE HOME E BACK --}}
    <div class="doctor-icons">
        <a href="{{ route('infoDoctor', [$id]) }}"><i class="fas fa-home"></i></a>
    </div>

    <div class="card-header">Recensisci il dottore</div>

    {{-- FORM --}}
    <form  class="form-auth" action="{{ route('return-review-it', [$id]) }}" method="post">
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
            <label for="review_text">{{ __('Recensione') }}</label>
            <div class="auth-item-input">
                <textarea class="message" id="review_text" type="text" name="review_text" required autocomplete="review_text" autofocus></textarea>
            </div>
        </div>

        {{-- FORM ITEM --}}
        <div class="form-auth-item margin-top-10">
            <label for="mark">Voto: </label>
            <select name="mark" class="review-vote">
                @foreach ($marks as $mark)
                    <option>{{ $mark['mark'] }}</option>
                @endforeach
            </select>
        </div>
        
        {{-- FORM ITEM --}}
        <div class="form-auth-item">
            <button class="button-auth margin-top-20" type="submit">
                {{ __('Recensisci') }}
            </button>
        </div>

    </form>

@endsection
