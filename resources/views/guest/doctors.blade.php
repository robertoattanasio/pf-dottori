@extends('layouts.homepage')

@section('pageTitle', 'doctors')

@section('content')

<?php include(app_path().'/Includes/counties.php'); ?>

    <div class="ricerca_avanzata">
        <label for="cerca">Cerca per citta':</label>
        <select id="countySelect">
            <option value="Tutti">- Tutti i risultati -</option>
            @foreach ($counties_name as $county_name)
                <option value="{{$county_name}}">{{$county_name}}</option>
            @endforeach
        </select>
    
        <label for="cerca">Cerca per voti:</label>
        <select id="markSelect">
            <option value="0">- Tutti i risultati -</option>
            <option value="4">>=4</option>
            <option value="3">>=3</option>
        </select>
    
        <label for="cerca">Cerca per numero recensioni:</label>
        <select id="reviewSelect">
            <option value="0">- Tutti i risultati -</option>
            <option value="5">>=5</option>
            <option value="2">>=2</option>
        </select>   
        
        <button id="search_doctors">Ricerca</button>
    </div>

    <div class="results">
        @if (count($users) == 0)
            <h3>Nessun risultato.</h3>
        @else
            @foreach ($users as $user)
                <div class="card {{$user['county']}}" value="[{{$user['media_voti']}}, {{$user['numero_recensioni']}}]">
                    <p id="name">{{$user['name']}}</p>
                    <p id="surname">{{$user['surname']}}</p>
                    <p id="county">{{$user['county']}}</p>
                    @if($user['numero_recensioni'])
                    <p id="media_voti">Media voti: {{$user['media_voti']}}</p>
                    <p id="numero_recensioni">Numero recensioni: {{$user['numero_recensioni']}}</p>
                    @endif
                    <a href="{{route('infoDoctor', [$user['id']])}}">Vedi informazioni specialista</a>
                </div>
            @endforeach 
        @endif
    </div>


    <script>

        // QUESTA RIGA SERVE SE VUOI VEDERE IN CONSOLE LOG L'ARRAY USERS IN CONSOLELOG JAVASCRIPT
        // users = <?php echo json_encode($users) ?>;

        document.getElementById('search_doctors').addEventListener('click', function() {
            var county_selected = document.getElementById('countySelect').value;
            var review_selected = document.getElementById('reviewSelect').value;
            var mark_selected = document.getElementById('markSelect').value;
            console.log(mark_selected);
            console.log(review_selected);
            var none = document.getElementsByClassName('card');

            if (county_selected == "Tutti") {
                // console.log('tutti');
                // console.log(county_selected);
                // console.log(none.length);

                for (i = 0; i < none.length; i++) {
                    none[i].classList.add("none");
                }

                for (j = 0; j < none.length; j++) {

                    if (JSON.parse(none[j].getAttribute('value'))[0] >= mark_selected && JSON.parse(none[j].getAttribute('value'))[1] >= review_selected) {
                    none[j].classList.remove("none");
                    }

                }

            } else if (document.getElementsByClassName(county_selected)) {

                for (i = 0; i < none.length; i++) {
                    none[i].classList.add("none");
                }

                var block = document.getElementsByClassName(county_selected);
                // console.log(block);

                for (ii = 0; ii < block.length; ii++) {
                    // console.log(JSON.parse(block[ii].getAttribute('value'))[0]);
                    if (JSON.parse(block[ii].getAttribute('value'))[0] >= mark_selected && JSON.parse(block[ii].getAttribute('value'))[1] >= review_selected) {
                        block[ii].classList.remove("none");
                    }

                }

            } 

        });

    </script>
@endsection
