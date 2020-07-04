@extends('vendor.multiauth.layouts.app')

@section('content')

    <paypal :paypal="{{ $paypal }}"></paypal>

@endsection
