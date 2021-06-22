@extends('layouts.homepage')

@section('pageTitle', 'Home')

@section('content')

{{-- JUMBOTRON FAQ --}}
<div class="vh-25 bg-color-lightblue">
    <div class="bg-image">
        <div class="container-faq">
            <h2>Domande frequenti</h2>
            <h4>Abbiamo tutte le risposte che cerchi.</h4>
        </div>
    </div>
</div>
{{-- /JUMBOTRON FAQ --}}

{{-- ACCORDION --}}
<div class="container-faq">
    <button class="accordion">Cos’è TrueDoctors?</button>
    <div class="panel">
        <p>TrueDoctors è il primo poliambulatorio digitale d’Italia che riunisce professionisti sanitari e socio-assistenziali. La nostra rete, attiva in tutto il territorio nazionale, comprende badanti, assistenti domiciliari, fisioterapisti, osteopati, medici, infermieri, pediatri, veterinari, nutrizionisti, psicologi, psicoterapeuti e massoterapisti, che erogano il servizio comodamente a domicilio e, in alcuni casi, anche attraverso videoconsulto da smartphone, pc o tablet.</p>
    </div>
    
    <button class="accordion">Dove siete attivi?</button>
    <div class="panel">
        <p>I principali servizi a domicilio di TrueDoctors sono disponibili nelle città di Torino, Milano, Roma, Bologna, Brescia, Verona, Genova, Firenze, Napoli e Catania, prima provincia inclusa. Il servizio di badanti per anziani, malati e disabili è invece attivo in tutta Italia. </p>
    </div>
    
    <button class="accordion">TrueDoctors ha sedi Fisiche?</button>
    <div class="panel">
        <p>I principali servizi a domicilio di TrueDoctors sono disponibili nelle città di Torino, Milano, Roma, Bologna, Brescia, Verona, Genova, Firenze, Napoli e Catania, prima provincia inclusa. Il servizio di badanti per anziani, malati e disabili è invece attivo in tutta Italia. </p>
    </div>
    
    <button class="accordion">Le prestazioni sono erogate solo a domicilio?</button>
    <div class="panel">
        <p>TrueDoctors ti raggiunge ovunque desideri: potrai ricevere visite e interventi specialistici a casa, in ospedale, sul luogo di lavoro e in casa di riposo. Alcuni dei nostri professionisti hanno anche a disposizione uno studio professionale dove, su richiesta, possono ricevere i pazienti.</p>
    </div>
    
    <button class="accordion">Come posso prenotare un intervento?</button>
    <div class="panel">
        <p>Con TrueDoctors la prenotazione è semplice e veloce: potrai compilare il modulo di prenotazione comodamente sul nostro sito, in pochi clic.</p>
    </div>
    
    <button class="accordion">Posso scegliere io il professionista?</button>
    <div class="panel">
        <p>Il nostro servizio si distingue per essere molto più rapido di quello offerto dalle strutture tradizionali. Possiamo contare su una vasta rete di professionisti su tutto il territorio, in grado di rispondere a ogni situazione o necessità. Questo ci permette di selezionare il miglior specialista per te in meno di 24 ore, abbattendo sensibilmente i tempi di attesa e rendendo il servizio tempestivo e adeguato a ogni tua esigenza oraria.</p>
    </div>
    
    <button class="accordion">Cosa succede quando invio una richiesta di prenotazione?</button>
    <div class="panel">
        <p>Una volta effettuata la prenotazione, ti invieremo un messaggio con il riepilogo dell’intervento e i dati dello specialista disponibile nel giorno (o nei giorni) e nella fascia oraria prescelta. In questo modo potrai contattare il professionista in caso di bisogno.</p>
    </div>
    
    <button class="accordion">Cosa fare se volessi ricevere solo una consulenza e non una visita?</button>
    <div class="panel">
        <p>TrueDoctors ti dà la possibilità di ricevere consulti medici e specialistici a distanza, ovunque tu sia. Scopri il nostro servizio di videoconsulti cliccando sulla sezione dedicato.</p>
    </div>
    
    <button class="accordion">Sei il professionista che si è candidato non mi sembra adatto?</button>
    <div class="panel">
        <p>Tutti gli specialisti che collaborano con TrueDoctors sono professionisti qualificati, in possesso delle certificazioni necessarie per svolgere la propria attività e con esperienza alle spalle. Tuttavia, nell’eventualità in cui non fossi convinto del profilo che si è reso disponibile per te, puoi comunicarcelo via mail e provvederemo a trovare un professionista in linea con le tue esigenze.</p>
    </div>
    
    <button class="accordion">Il costo delle presentazioni è detraibile dalla dichiarazione dei redditi?</button>
    <div class="panel">
        <p>Dipende dalla tipologia di intervento richiesto. TrueDoctors garantisce la detraibilità di tutte le spese riconosciute come sanitarie, proprio come un qualsiasi poliambulatorio o centro medico.<br>Per farlo basterà utilizzare la fattura che riceverai dopo il pagamento delle prestazioni. Alcuni costi, ad esempio quelli relativi all’Assistenza Domiciliare, sono detraibili solo entro certi limiti e a seconda delle caratteristiche del contribuente.</p>
    </div>
</div>
{{-- /ACCORDION --}}

{{-- SCRIPT --}}
<script>

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }

</script>
{{-- /SCRIPT --}}

@endsection