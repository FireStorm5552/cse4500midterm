@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>Name: {{ $uzer->name; }}</h2>
  <h2>Email: {{ $uzer->email; }}</h2>
  <h2>Phone Number: {{ $uzer->phone; }}</h2>
  <a href="{{ route('uzers.edit', ['uzer'=>$uzer->id]) }} " class="btn btn-warning">Update</a>
  <a href="{{ route('uzers.destroy',['uzer'=>$uzer->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
  Delete</a>
  <form id="submit-form" action="{{ route('uzers.destroy',['uzer'=>$uzer->id]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
@stop