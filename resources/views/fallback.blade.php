@extends('adminlte::page')

@section('title', 'Page Not Found')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
    <h2>404</h2>
	<p>The page you were looking for could not be found. Please <a href ="/"> return to the dashboard </a></p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop