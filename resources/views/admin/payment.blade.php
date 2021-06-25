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
            <h1>Pagamento</h1>
        </div>
        <div class="doctor-right-bottom-container relative">
            <form id="payment-form" method='post' action="{{ route('payment-make') }}">
                @csrf
                @method('GET')

                <div id="dropin-container"></div>
                <input id="import" value="{{$import}}" type="hidden"
                class="form-control @error('import') is-invalid @enderror" name="import"
                required autocomplete="import" autofocus>
                <input id="nonce" value="" type="hidden"
                class="form-control @error('nonce') is-invalid @enderror" name="payment_method_nonce"
                required autocomplete="payment_method_nonce" autofocus>
                <button id="submit-button" type="submit">Pay</button>            
            </form> 
        </div>

        <script>
            var form = document.querySelector('#payment-form');  

            braintree.dropin.create({
            authorization: "{{ ClientToken::generate() }}",
            container: '#dropin-container'
            }, function (createErr, instance) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    console.log('fwefe')
                    instance.requestPaymentMethod(function (err, payload) {
                        document.querySelector('#nonce').value = payload.nonce;
                        form.submit();
                    });
                });
            });
        </script>    

    </div>

@endsection
