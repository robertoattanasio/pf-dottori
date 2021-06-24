@extends('layouts.dashboard')

@section('pageTitle', 'Statistiche')

@section('content')

    <?php
    use App\Mark;
    use App\Review; //Aggiunto adesso da me

    //Aggiunto adesso da me
    function monthlyMarks () {
        
    };

    function monthlyReviewsNumber () {
        
    };

    function totals () {
        
    };

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
            // numero di recensioni mensili
            $marks_months[$i]['nr_reviews'] +=1;
            $marks_months[$i]['sum_marks'] += $review['mark'];}
        }
        $sum_marks +=$review['mark'];
        }

        // totali - media voti complessivi
        if ($n_reviews !=0) {
        $avrg_mark=$sum_marks / $n_reviews;
        
        } 
    ?> 
        
        {{-- DOCTOR RIGHT CONTAINER --}} 
        <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1>Statistiche</h1>
        </div>

        {{-- DOCTOR RIGHT BOTTOM CONTAINER --}}
        <div class="doctor-right-bottom-container no-padding">

            <div class="marks_container">

                {{-- MEDIA VOTI MENSILE --}}
                <div class="marks_section relative">
                    <img src="{{asset('img/info-graphic-3.png')}}">
                    <h3>Media voti mensile:</h3>
                    <ul class="avrg_marks">
                        @for ($j = 0; $j < count($marks_months); $j++)
                            @if ($marks_months[$j]['nr_reviews'] == 0)
                                <li>
                                    {{ $marks_months[$j]['month'] }} :
                                    <div class="stars_container">
                                        <?php  
                                        $starEmpty="<i class='far fa-star'></i>";
                                        echo str_repeat($starEmpty, 5);
                                    ?>
                                    </div>
                                    
                                </li> 
                            @else
                                <?php   
                                    $tmp = $marks_months[$j]['sum_marks'] / $marks_months[$j]['nr_reviews'];
                                    $tpmFloored = floor($tmp);
                                ?>

                                <li>{{ $marks_months[$j]['month'] }} : 
                                    <div class="stars_container">
                                        <?php
                                        $starEmpty="<i class='far fa-star'></i>";
                                        $starFull="<i class='fas fa-star'></i>"; 
                                        echo str_repeat($starFull, $tpmFloored);
                                        echo str_repeat($starEmpty, 5 - $tpmFloored);
                                    ?>
                                    </div>
                                    
                                </li>                           
                        
                                @endif
                            @endfor
                    </ul>
                </div>

                {{-- <?php $star="<i class='far fa-star'>"; echo str_repeat("$star", 2);?> --}}

                {{-- RECENSIONI MENSILI --}}
                <div class="marks_section relative">
                    <img src="{{asset('img/info-graphic-3.png')}}">
                    <div class="reviews_section">
                        <h3>Numero recensioni mensili:</h3>
                        <ul class="avrg_reviews">
                            @for ($j = 0; $j < count($marks_months); $j++)
                                <li>
                                    {{ $marks_months[$j]['month'] }} :
                                    <div>
                                        {{ $marks_months[$j]['nr_reviews'] }}
                                    </div>
                                    
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
    
                {{-- TOTALI --}}
                <div class="marks_section relative">
                    <img src="{{asset('img/info-graphic-3.png')}}">
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

        </div>
        {{-- FINE DOCTOR RIGHT BOTTOM CONTAINER --}}

    </div>
    {{-- FINE DOCTOR RIGHT CONTAINER --}}
@endsection
