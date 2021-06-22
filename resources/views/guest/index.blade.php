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
                <h4 class="margin-top-80">Scopri i nostri servizi a domicilio</h4>

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

    {{-- DOCTOR CONTAINER --}}
    <div class="doctors-container">
        <h3>I nostri specialisti di punta</h3>
        {{-- PARAGRAPH --}}
        <p class="generic margin-top-10">Prenota in pochi clic servizi sanitari e socio-assistenziali, 7 giorni su 7, senza liste d'attesa.</p>

        {{-- DOCTOR SCROLL HORIZONTAL --}}
        <div class="doctors-scroll-container margin-top-20">

            @foreach ($sponsorized_users as $user)
                {{-- DOCTOR CARD --}}
                <div class="doctors-card {{$user['county']}}">

                    {{-- DOCTOR CARD INFO --}}
                    <div class="doctors-card-info">
                        <span></span>
                        <span id="name">{{$user['name']}}</span>
                        <span id="surname">{{$user['surname']}}</span>
                        <div class="margin-top-10" id="county">{{$user['county']}}</div>

                        <div class="doctors-card-specialistic margin-top-10">
                            <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    {{-- DOCTOR CARD VOTES --}}
                    <div class="doctor-card-votes margin-top-10">
                        @if($user['numero_recensioni'])
                        <div id="media_voti">Media voti: {{$user['media_voti']}}/5</div>

                        <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>
                        @endif
                    </div>

                    {{-- @if ($user['specialization'])
                    <p id="specialistica">{{$user['specialization']}}</p>
                    @endif --}}
                    <a class="margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                </div>
                {{-- FINE DOCTOR CARD --}}
            @endforeach

            @foreach ($sponsorized_users as $user)
                {{-- DOCTOR CARD --}}
                <div class="doctors-card {{$user['county']}}">

                    {{-- DOCTOR CARD INFO --}}
                    <div class="doctors-card-info">
                        <span></span>
                        <span id="name">{{$user['name']}}</span>
                        <span id="surname">{{$user['surname']}}</span>
                        <div class="margin-top-10" id="county">{{$user['county']}}</div>

                        <div class="doctors-card-specialistic margin-top-10">
                            <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    {{-- DOCTOR CARD VOTES --}}
                    <div class="doctor-card-votes margin-top-10">
                        @if($user['numero_recensioni'])
                        <div id="media_voti">Media voti: {{$user['media_voti']}}/5</div>

                        <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>
                        @endif
                    </div>

                    {{-- @if ($user['specialization'])
                    <p id="specialistica">{{$user['specialization']}}</p>
                    @endif --}}
                    <a class="margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                </div>
                {{-- FINE DOCTOR CARD --}}
            @endforeach
            @foreach ($sponsorized_users as $user)
                {{-- DOCTOR CARD --}}
                <div class="doctors-card {{$user['county']}}">

                    {{-- DOCTOR CARD INFO --}}
                    <div class="doctors-card-info">
                        <span></span>
                        <span id="name">{{$user['name']}}</span>
                        <span id="surname">{{$user['surname']}}</span>
                        <div class="margin-top-10" id="county">{{$user['county']}}</div>

                        <div class="doctors-card-specialistic margin-top-10">
                            <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    {{-- DOCTOR CARD VOTES --}}
                    <div class="doctor-card-votes margin-top-10">
                        @if($user['numero_recensioni'])
                        <div id="media_voti">Media voti: {{$user['media_voti']}}/5</div>

                        <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>
                        @endif
                    </div>

                    {{-- @if ($user['specialization'])
                    <p id="specialistica">{{$user['specialization']}}</p>
                    @endif --}}
                    <a class="margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                </div>
                {{-- FINE DOCTOR CARD --}}
            @endforeach
            @foreach ($sponsorized_users as $user)
                {{-- DOCTOR CARD --}}
                <div class="doctors-card {{$user['county']}}">

                    {{-- DOCTOR CARD INFO --}}
                    <div class="doctors-card-info">
                        <span></span>
                        <span id="name">{{$user['name']}}</span>
                        <span id="surname">{{$user['surname']}}</span>
                        <div class="margin-top-10" id="county">{{$user['county']}}</div>

                        <div class="doctors-card-specialistic margin-top-10">
                            <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    {{-- DOCTOR CARD VOTES --}}
                    <div class="doctor-card-votes margin-top-10">
                        @if($user['numero_recensioni'])
                        <div id="media_voti">Media voti: {{$user['media_voti']}}/5</div>

                        <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>
                        @endif
                    </div>

                    {{-- @if ($user['specialization'])
                    <p id="specialistica">{{$user['specialization']}}</p>
                    @endif --}}
                    <a class="margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                </div>
                {{-- FINE DOCTOR CARD --}}
            @endforeach
            @foreach ($sponsorized_users as $user)
                {{-- DOCTOR CARD --}}
                <div class="doctors-card {{$user['county']}}">

                    {{-- DOCTOR CARD INFO --}}
                    <div class="doctors-card-info">
                        <span></span>
                        <span id="name">{{$user['name']}}</span>
                        <span id="surname">{{$user['surname']}}</span>
                        <div class="margin-top-10" id="county">{{$user['county']}}</div>

                        <div class="doctors-card-specialistic margin-top-10">
                            <ul>
                                @if($user->specializations)
                                    @foreach ($user->specializations->toArray() as $specialization)
                                        <li class="specialistica">&bull; {{$specialization['name']}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    {{-- DOCTOR CARD VOTES --}}
                    <div class="doctor-card-votes margin-top-10">
                        @if($user['numero_recensioni'])
                        <div id="media_voti">Media voti: {{$user['media_voti']}}/5</div>

                        <div id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</div>
                        @endif
                    </div>

                    {{-- @if ($user['specialization'])
                    <p id="specialistica">{{$user['specialization']}}</p>
                    @endif --}}
                    <a class="margin-top-20" href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                </div>
                {{-- FINE DOCTOR CARD --}}
            @endforeach
        </div>
        {{-- FINE DOCTOR SCROLL HORIZONTAL --}}
    </div>
    {{-- DOCTOR CONTAINER --}}

    {{-- SECTION BANNER --}}
    <section id="banner">
        <div class="banner-container">
            <h2 class="banner">Vogliamo rendere la sanità<br>
                più semplice, rapida e su misura.</h2>
        </div>
    </section>

    {{-- FINE SECTION BANNER --}}

    {{-- SECTION COLLABORATE --}}
    <section id="collaborate">
        <div class="collaborate-wrapper">
            <h3>Sei un medico o un professionista sanitario?</h3>
            {{-- PARAGRAPH --}}
            <p class="generic margin-top-10">Lavoriamo solo con personale qualificato e certificato, capace di rispondere a precisi criteri di selezione.<br>Il nostro obiettivo è garantirti un servizio con elevati standard di qualità.<br><br>Con noi la tua salute è nelle mani dei migliori professionisti!</p>
            <button class="margin-top-40">Collaboriamo</button>
        </div>
    </section>
    {{-- FINE SECTION COLLABORATE --}}

@endsection