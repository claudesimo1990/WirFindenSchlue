@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>IFM- Users</h1>
@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('/js/app.js')}}"></script>
    <script> console.log('Hi!'); </script>
@stop
