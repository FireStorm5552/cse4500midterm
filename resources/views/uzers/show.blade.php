@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>{{ $uzer->name; }}</h2>
  <h2>{{ $uzer->email; }}</h2>
  <h2>{{ $uzer->phone; }}</h2>
@stop