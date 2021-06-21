@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')

<?php include(app_path().'/Includes/counties.php'); ?>

    {{-- JUMBOTRON --}}
    <div class="jumbotron-big">

        {{-- JUMBOTRON WRAPPER --}}
        <div class="jumbotron-wrapper">

            {{-- JUMBOTRON LEFT CONTAINER --}}
            <div class="jumbotron-left-container">

                {{-- H2 TITLE --}}
                <h2>Visite a domicilio, videoconsulti e assistenza domiciliare</h2>
                
                {{-- PARAGRAPH --}}
                <p class="generic margin-top-10">Prenota in pochi clic servizi sanitari e socio-assistenziali, 7 giorni su 7, senza liste d'attesa.</p>

                {{-- H3 SEARCH --}}
                <h3 class="margin-top-80">Scopri i nostri servizi a domicilio</h3>

                {{-- SEARCH --}}
                <form class="margin-top-20" enctype="multipart/form-data" method="POST" action="{{ route('filter-specialization') }}">
                    @csrf
            
                        <select name="specialization">
                            @foreach ($specializations as $specialization)
                                <option value="{{$specialization}}">{{$specialization}}</option>
                            @endforeach
                        </select>
            
                        <button type="submit">
                            {{ __('Ricerca') }}
                        </button>
                </form>
            </div>
            {{-- FINE JUMBOTRON LEFT CONTAINER --}}

            <div class="jumbotron-right-container">
                <img src="img/info-graphic-1.png" alt="">
            </div>

        </div>
    </div>

    <div class="sponsorized_doctors">
        <h2>I nostri specialisti (sponsorizzati... mettiamo un titolo appetibile)</h2>
        @foreach ($sponsorized_users as $user)
            <div class="card {{$user['county']}}">
                <p id="name">{{$user['name']}}</p>
                <p id="surname">{{$user['surname']}}</p>
                <p id="county">{{$user['county']}}</p>
                @if($user['numero_recensioni'])
                <p id="media_voti">Media voti: {{$user['media_voti']}}</p>
                <p id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</p>
                @endif
                @if($user->specializations)
                    @foreach ($user->specializations->toArray() as $specialization)
                        <p class="specialistica">{{$specialization['name']}}</p>
                    @endforeach
                @endif
                {{-- @if ($user['specialization'])
                <p id="specialistica">{{$user['specialization']}}</p>
                @endif --}}
                <a href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
            </div>
        @endforeach
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis natus explicabo non nobis voluptatibus, aperiam laborum magni aliquid reprehenderit qui minus vel tempore repellendus doloribus voluptatum, quam aut placeat?</p>
    </div>
    
@endsection