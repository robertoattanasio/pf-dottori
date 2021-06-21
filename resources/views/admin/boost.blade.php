@extends('layouts.dashboard')

@section('pageTitle', 'Boosts')

@section('content')

    <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1> Sponsorizza il mio profilo </h1>
        </div>

        <div class="doctor-right-bottom-container relative">
            <form action="{{ route('add-sponsorization') }}" method="post">
                @csrf
                @method('PUT')

                @foreach ($boosts as $boost)
                    <input type="radio" id="boost_stuff" name="boost_stuff" value="{{$boost->id}}">
                    <label for="boost_name">
                        <h3>{{$boost->boost_name}}</h3>
                        <p>{{$boost->hours}}H</p>
                        <p>{{$boost->price}}$</p>
                    </label><br>
                @endforeach
                
                <input type="submit" value="send">
                <label for="">Vai al pagamento</label>
            </form>
        </div>

    </div>

@endsection