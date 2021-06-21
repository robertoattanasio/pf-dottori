@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')

    <?php 
        $counties = [["id" => "1", "nome" => "Torino", "codice" => "0"],["id" => "2", "nome" => "Vercelli", "codice" => "0"],["id" => "3", "nome" => "Novara", "codice" => "0"],["id" => "4", "nome" => "Cuneo", "codice" => "0"],["id" => "5", "nome" => "Asti", "codice" => "0"],["id" => "6", "nome" => "Alessandria", "codice" => "0"],["id" => "96", "nome" => "Biella", "codice" => "0"],["id" => "103", "nome" => "Verbano-Cusio-Ossola", "codice" => "0"],["id" => "7", "nome" => "Valle d'Aosta/Vallée d'Aoste", "codice" => "0"],["id" => "12", "nome" => "Varese", "codice" => "0"],["id" => "13", "nome" => "Como", "codice" => "0"],["id" => "14", "nome" => "Sondrio", "codice" => "0"],["id" => "15", "nome" => "Milano", "codice" => "0"],["id" => "16", "nome" => "Bergamo", "codice" => "0"],["id" => "17", "nome" => "Brescia", "codice" => "0"],["id" => "18", "nome" => "Pavia", "codice" => "0"],["id" => "19", "nome" => "Cremona", "codice" => "0"],["id" => "20", "nome" => "Mantova", "codice" => "0"],["id" => "97", "nome" => "Lecco", "codice" => "0"],["id" => "98", "nome" => "Lodi", "codice" => "0"],["id" => "108", "nome" => "Monza e della Brianza", "codice" => "0"],["id" => "21", "nome" => "Bolzano/Bozen", "codice" => "0"],["id" => "22", "nome" => "Trento", "codice" => "0"],["id" => "23", "nome" => "Verona", "codice" => "0"],["id" => "24", "nome" => "Vicenza", "codice" => "0"],["id" => "25", "nome" => "Belluno", "codice" => "0"],["id" => "26", "nome" => "Treviso", "codice" => "0"],["id" => "27", "nome" => "Venezia", "codice" => "0"],["id" => "28", "nome" => "Padova", "codice" => "0"],["id" => "29", "nome" => "Rovigo", "codice" => "0"],["id" => "30", "nome" => "Udine", "codice" => "0"],["id" => "31", "nome" => "Gorizia", "codice" => "0"],["id" => "32", "nome" => "Trieste", "codice" => "0"],["id" => "93", "nome" => "Pordenone", "codice" => "0"],["id" => "8", "nome" => "Imperia", "codice" => "0"],["id" => "9", "nome" => "Savona", "codice" => "0"],["id" => "10", "nome" => "Genova", "codice" => "0"],["id" => "11", "nome" => "La Spezia", "codice" => "0"],["id" => "33", "nome" => "Piacenza", "codice" => "0"],["id" => "34", "nome" => "Parma", "codice" => "0"],["id" => "35", "nome" => "Reggio nell'Emilia", "codice" => "0"],["id" => "36", "nome" => "Modena", "codice" => "0"],["id" => "37", "nome" => "Bologna", "codice" => "0"],["id" => "38", "nome" => "Ferrara", "codice" => "0"],["id" => "39", "nome" => "Ravenna", "codice" => "0"],["id" => "40", "nome" => "Forlì-Cesena", "codice" => "0"],["id" => "99", "nome" => "Rimini", "codice" => "0"],["id" => "45", "nome" => "Massa-Carrara", "codice" => "0"],["id" => "46", "nome" => "Lucca", "codice" => "0"],["id" => "47", "nome" => "Pistoia", "codice" => "0"],["id" => "48", "nome" => "Firenze", "codice" => "0"],["id" => "49", "nome" => "Livorno", "codice" => "0"],["id" => "50", "nome" => "Pisa", "codice" => "0"],["id" => "51", "nome" => "Arezzo", "codice" => "0"],["id" => "52", "nome" => "Siena", "codice" => "0"],["id" => "53", "nome" => "Grosseto", "codice" => "0"],["id" => "100", "nome" => "Prato", "codice" => "0"],["id" => "54", "nome" => "Perugia", "codice" => "0"],["id" => "55", "nome" => "Terni", "codice" => "0"],["id" => "41", "nome" => "Pesaro e Urbino", "codice" => "0"],["id" => "42", "nome" => "Ancona", "codice" => "0"],["id" => "43", "nome" => "Macerata", "codice" => "0"],["id" => "44", "nome" => "Ascoli Piceno", "codice" => "0"],["id" => "109", "nome" => "Fermo", "codice" => "0"],["id" => "56", "nome" => "Viterbo", "codice" => "0"],["id" => "57", "nome" => "Rieti", "codice" => "0"],["id" => "58", "nome" => "Roma", "codice" => "0"],["id" => "59", "nome" => "Latina", "codice" => "0"],["id" => "60", "nome" => "Frosinone", "codice" => "0"],["id" => "66", "nome" => "L'Aquila", "codice" => "0"],["id" => "67", "nome" => "Teramo", "codice" => "0"],["id" => "68", "nome" => "Pescara", "codice" => "0"],["id" => "69", "nome" => "Chieti", "codice" => "0"],["id" => "70", "nome" => "Campobasso", "codice" => "0"],["id" => "94", "nome" => "Isernia", "codice" => "0"],["id" => "61", "nome" => "Caserta", "codice" => "0"],["id" => "62", "nome" => "Benevento", "codice" => "0"],["id" => "63", "nome" => "Napoli", "codice" => "0"],["id" => "64", "nome" => "Avellino", "codice" => "0"],["id" => "65", "nome" => "Salerno", "codice" => "0"],["id" => "71", "nome" => "Foggia", "codice" => "0"],["id" => "72", "nome" => "Bari", "codice" => "0"],["id" => "73", "nome" => "Taranto", "codice" => "0"],["id" => "74", "nome" => "Brindisi", "codice" => "1"],["id" => "75", "nome" => "Lecce", "codice" => "0"],["id" => "110", "nome" => "Barletta-Andria-Trani", "codice" => "1"],["id" => "76", "nome" => "Potenza", "codice" => "0"],["id" => "77", "nome" => "Matera", "codice" => "0"],["id" => "78", "nome" => "Cosenza", "codice" => "0"],["id" => "79", "nome" => "Catanzaro", "codice" => "0"],["id" => "80", "nome" => "Reggio Calabria", "codice" => "0"],["id" => "101", "nome" => "Crotone", "codice" => "0"],["id" => "102", "nome" => "Vibo Valentia", "codice" => "0"],["id" => "81", "nome" => "Trapani", "codice" => "0"],["id" => "82", "nome" => "Palermo", "codice" => "0"],["id" => "83", "nome" => "Messina", "codice" => "0"],["id" => "84", "nome" => "Agrigento", "codice" => "1"],["id" => "85", "nome" => "Caltanissetta", "codice" => "0"],["id" => "86", "nome" => "Enna", "codice" => "0"],["id" => "87", "nome" => "Catania", "codice" => "0"],["id" => "88", "nome" => "Ragusa", "codice" => "0"],["id" => "89", "nome" => "Siracusa", "codice" => "0"],["id" => "90", "nome" => "Sassari", "codice" => "0"],["id" => "91", "nome" => "Nuoro", "codice" => "0"],["id" => "92", "nome" => "Cagliari", "codice" => "0"],["id" => "95", "nome" => "Oristano", "codice" => "0"],["id" => "111", "nome" => "Sud Sardegna", "codice" => "0"]];
        $counties_name = [];

        foreach ($counties as $county) {
            array_push($counties_name, $county['nome']);
        }

        sort($counties_name, SORT_REGULAR);
    ?>
    {{-- JUMBOTRON --}}
    <div class="jumbotron">

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
    </div>





    
@endsection