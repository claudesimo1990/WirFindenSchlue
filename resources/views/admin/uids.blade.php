@extends('admin.layaout')

@section('content_header')
    <h1>Neue UID Erfassen</h1>
    <p>Geben Sie hier bitte neue zur Verfügung stehende UIDs SCHLÜ ein.</p>
@stop

@section('content')

    <uidscomponent :datauids="{{$uids}}"></uidscomponent>

@endsection
