@extends('layouts.dashboard')

@section('pageTitle', 'Recensioni')

@section('content')
    <?php use App\Mark; ?>

    {{-- DOCTOR RIGHT CONTAINER --}}
    <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1>Le tue recensioni</h1>
        </div>
        <div class="doctor-right-bottom-container">
            @foreach ($reviews as $review)
                <div class="single_review clearfix">
                    <h4><span>nome paziente: </span>{{ $review['name_patient'] }}</h4>
                    <p><span>recensione: </span> {{ $review['review_text'] }}</p>
                    <p><span>voto: </span> {{ Mark::where('id', $review['mark_id'])->first()['mark'] }}/5</p>
                    <p><span>data: </span> {{ substr($review['created_at'], 0, 10) }}</p>
                </div>
            @endforeach
        </div>

        {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
    </div>
    {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
