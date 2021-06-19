@extends('layouts.homepage')

@section('pageTitle', 'review-it')

@section('content')
recensisci {{$id}} inserendo il tuo nome, il voto e la tua opinione (che' noi medici ce ne sbattiamo comunque il cazzo :P)

    <form action="{{route('return-review-it', [$id])}}" method="post">
        @csrf
        @method('GET')

        <div class="form-auth-item">
            <label for="name_patient">{{ __('nome') }}</label>

            <div class="auth-item-input">
                <input id="name_patient" type="text" name="name_patient" required autocomplete="name_patient" autofocus>
            </div>
        </div>

        <div class="form-auth-item">
            <label for="review_text">{{ __('recensione') }}</label>

            <div class="auth-item-input">
                <input id="review_text" type="text" name="review_text" required autocomplete="review_text" autofocus>
            </div>
        </div>

        <div class="form-auth-item">
            <label for="mark">Voto</label>
            <select name="mark">
                @foreach ($marks as $mark)
                    <option>{{$mark['mark']}}</option>
                @endforeach
            </select>        
        </div>


        <button type="submit">
            {{ __('Recensisci') }}
        </button>

    </form>

@endsection