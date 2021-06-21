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
        
        foreach ($reviews as $review) {
            $review['mark'] = Mark::where('id', $review['mark_id'])->first()['mark'];
            // dd(date("m",strtotime($review['created_at'])));

            for ($i = 0; $i < count($marks_months); $i++) {
                // dd($marks_months[$i]);
                if (date("m",strtotime($review['created_at'])) == $marks_months[$i]['value']) {
                    $marks_months[$i]['nr_reviews'] += 1;
                    $marks_months[$i]['sum_marks'] += $review['mark'];
                }

            }

            $sum_marks += $review['mark'];
        }

        // dd($marks_months);

        $avrg_mark = $sum_marks/$n_reviews;
        ?>

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1>Statistiche</h1>
            </div>
            <div class="doctor-right-bottom-container">
                <div class="anno" value="2021">
                    <h3>Anno 2021</h3>
                    <div class="marks_section">
                        <p>Media voti per mese:</p>
                        <ul class="avrg_marks">
                            @for ($j = 0; $j < count($marks_months); $j++)
                                @if ($marks_months[$j]['nr_reviews'] == 0)
                                <li>{{$marks_months[$j]['month']}} : n/d</li>
                                @else
                                <li>{{$marks_months[$j]['month']}} : {{$marks_months[$j]['sum_marks']/$marks_months[$j]['nr_reviews']}}</li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                    <div class="reviews_section">
                        <p>Recensioni per mese:</p>
                        <ul class="avrg_reviews">
                            @for ($j = 0; $j < count($marks_months); $j++)
                                <li>{{$marks_months[$j]['month']}} : {{$marks_months[$j]['nr_reviews']}}</li>
                            @endfor
                        </ul>
                    </div>
                    <p>Media voti complessivi: {{$avrg_mark}}</p>
                    <p>Numero recensioni complessive: {{$n_reviews}}</p>    
                </div>
            </div>

            {{-- <a href="{{ URL::to('/') }}/storage/{{ Auth::user()->cv }}" name="cv">cv</a> --}}
        </div>
        {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection