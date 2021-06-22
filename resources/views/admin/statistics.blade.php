@extends('layouts.dashboard')

@section('pageTitle', 'Statistiche')

@section('content')

    <?php
    use App\Mark;

    $marks_months = [
    [
    'value' => 1,
    'month' => 'Gennaio',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 2,
    'month' => 'Febbraio',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 3,
    'month' => 'Marzo',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 4,
    'month' => 'Aprile',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 5,
    'month' => 'Maggio',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 6,
    'month' => 'Giugno',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 7,
    'month' => 'Luglio',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 8,
    'month' => 'Agosto',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 9,
    'month' => 'Settembre',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 10,
    'month' => 'Ottobre',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 11,
    'month' => 'Novembre',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    [
    'value' => 12,
    'month' => 'Dicembre',
    'nr_reviews' => 0,
    'sum_marks' => 0,
    ],
    ];

    $sum_marks = 0;
    $n_reviews = count($reviews);
    $avrg_mark = 0;

    foreach ($reviews as $review) {
    $review['mark'] = Mark::where('id', $review['mark_id'])->first()['mark'];

    for ($i = 0; $i < count($marks_months); $i++) { 
        if (date('m', strtotime($review['created_at'])) == $marks_months[$i]['value']) {
             $marks_months[$i]['nr_reviews'] +=1;
        $marks_months[$i]['sum_marks'] += $review['mark']; } } $sum_marks +=$review['mark']; } 
        if ($n_reviews !=0) {
        $avrg_mark=$sum_marks / $n_reviews; 
        } ?> {{-- DOCTOR RIGHT CONTAINER --}} 
        <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1>Statistiche</h1>
        </div>
        <div class="doctor-right-bottom-container">
            <div class="marks_section">
                <h3>Media voti mensile:</h3>
                <ul class="avrg_marks">
                    @for ($j = 0; $j < count($marks_months); $j++)
                        @if ($marks_months[$j]['nr_reviews'] == 0) <li>{{ $marks_months[$j]['month'] }} : n/d</li>
                    @else
                        <li>{{ $marks_months[$j]['month'] }} :
                        {{ $marks_months[$j]['sum_marks'] / $marks_months[$j]['nr_reviews'] }}</li> @endif
                    @endfor
                </ul>
            </div>
            <div class="marks_section">
                <div class="reviews_section">
                    <h3>Recensioni mensili:</h3>
                    <ul class="avrg_reviews">
                        @for ($j = 0; $j < count($marks_months); $j++)
                            <li>{{ $marks_months[$j]['month'] }} : {{ $marks_months[$j]['nr_reviews'] }}</li><br>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="marks_section">
                <div class="totals_section">
                    <h3>Totali:</h3>
                    @if ($avrg_mark == 0)
                        <p>Media voti complessivi: n/d</p>
                    @else
                        <p>Media voti complessivi: {{ $avrg_mark }}</p>
                    @endif
                <p>Numero recensioni complessive: {{ $n_reviews }}</p>
                </div>
            </div>

        </div>

        {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
    @endsection
