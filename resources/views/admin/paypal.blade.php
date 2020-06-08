@extends('admin.layaout')

@section('content_header')
    <h1>Paypal Wert</h1>
    <p>Geben Sie den neuen Paypal Wert ein</p>
@stop

@section('content')

    <paypal :paypal="{{ $paypal }}"></paypal>

@endsection
