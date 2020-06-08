@extends('layaouts.master')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="w3-container w3-display-middle w3-card-4 " method="post" id="payment-form"  action="{{route('paypal.pay')}}">
                    {{ csrf_field() }}
                    <h2 class="w3-text-blue">Payment Form</h2>
                    <p>Demo PayPal form - Integrating paypal in laravel</p>
                    <p>
                        <label class="w3-text-blue"><b>Enter Amount</b></label>
                        <input class="w3-input w3-border" name="amount" type="text"></p>
                    <button class="btn btn-info">Pay with PayPal</button></p>
                </form>
            </div>
        </div>
    </div>
@endsection
