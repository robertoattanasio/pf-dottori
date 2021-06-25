@extends('layouts.dashboard')

@section('pageTitle', 'Boosts')

@section('content')

    <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1> Sponsorizza il mio profilo </h1>
        </div>

        <div class="doctor-right-bottom-container relative">
            @if ($is_sponsorized['success'] == true)
                <h3>Il tuo profilo e' gia' sponsorizzato.</h3>
                <p>Scadenza sponsorizzazione in data: {{$is_sponsorized['expires']}}</p>
            @else
                <form action="{{ route('add-sponsorization') }}" method="post">
                    @csrf
                    @method('PUT')

                    @foreach ($boosts as $boost)
                        <div class="single_boost">
                            <div id="boost_name">
                                <input type="radio" id="boost_stuff" name="boost_stuff" value="{{ $boost->id }}">
                                <label for="boost_name">
                                    <h3><span>{{ $boost->boost_name }}</span></h3>
                            </div>
                            <div id="boost_details">
                                <p>{{ $boost->hours }}H</p>
                                <p>{{ $boost->price }}$</p>
                            </div>

                            </label><br>
                        </div>
                    @endforeach

                    <input type="submit" value="send" class="small-button green-button">
                    <label for="">Vai al pagamento</label>
                </form>
            @endif
        </div>

    </div>

@endsection
