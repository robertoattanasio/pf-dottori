@extends('layouts.dashboard')

@section('pageTitle', 'Recensioni')

@section('content')
        <?php
        use App\Mark;
        ?>

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1>Le tue recensioni</h1>
            </div>
            <div class="doctor-right-bottom-container">
                @foreach ($reviews as $review)
                    <h4>{{$review['name_patient']}}</h4>
                    <p>{{$review['review_text']}}</p>
                    <p>Voto: {{Mark::where('id', $review['mark_id'])->first()['mark']}}</p>
                    <p>Scritta in data: {{$review['created_at']}}</p>
                @endforeach
            </div>

            {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
