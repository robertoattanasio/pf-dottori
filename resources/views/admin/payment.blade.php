@extends('layouts.dashboard')

@section('pageTitle', 'Payment')

@section('content')

    <?php
        use \Braintree\ClientToken;
    ?>

    {{-- JQUERY E PAGAMENTO --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.30.1/js/dropin.min.js"></script>

    <div class="doctor-right-container">
        <div class="doctor-right-top-container">
            <h1>BRAINTREE SUCA</h1>
            <h1>_CYKA BLYAT_</h1>
            <h1>_TROLOL_</h1>
        </div>
        <div class="doctor-right-bottom-container relative">
            <form id="payment-form">
                <div id="dropin-container"></div>
                <input style="display: none" id="import" value="{{$import}}" type="text"
                class="form-control @error('import') is-invalid @enderror" name="import"
                required autocomplete="import" autofocus>
                <input style="display: none" id="nonce" value="{{$import}}" type="text"
                class="form-control @error('nonce') is-invalid @enderror" name="nonce"
                required autocomplete="nonce" autofocus>
                <button id="submit-button">Pay</button>            
            </form>        
        </div>

        <script>
            var button = document.querySelector('#submit-button');            
            braintree.dropin.create({
            authorization: "{{ ClientToken::generate() }}",
            container: '#dropin-container'
            }, function (createErr, instance) {
                button.addEventListener('click', function () {
                    instance.requestPaymentMethod(function (err, payload) {
                        console.log(payload);
                    });
                });
            });
        </script>    

    </div>

@endsection
