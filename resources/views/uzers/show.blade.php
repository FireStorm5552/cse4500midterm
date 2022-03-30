@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>{{ $uzer->name; }}</h2>
  <h2>{{ $uzer->email; }}</h2>
  <h2>{{ $uzer->phone; }}</h2>
  <a href="{{ route('uzer.destroy',['uzer'=>$uzer->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
  Delete</a>
  <form id="submit-form" action="{{ route('uzer.destroy',['uzer'=>$uzer->id]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
@stop