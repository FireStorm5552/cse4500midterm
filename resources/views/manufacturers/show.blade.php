@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer Info</h1>
@stop

@section('content')
  <h2>Name: {{ $manufacturer->name; }}</h2>
  <h2>Sales Phone Number: {{ $manufacturer->salesphone; }}</h2>
  <h2>Sales Email Address: {{ $manufacturer->salesemail; }}</h2>
  <h2>Tech Support Phone Number: {{ $manufacturer->techphone; }}</h2>
  <h2>Tech Support Email Address: {{ $manufacturer->techemail; }}</h2>
  <a href="{{ route('manufacturers.edit', ['manufacturer'=>$manufacturer->id]) }} " class="btn btn-warning">Update</a>
  <a href="{{ route('manufacturers.destroy',['manufacturer'=>$manufacturer->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
  Delete</a>
  <form id="submit-form" action="{{ route('manufacturers.destroy',['manufacturer'=>$manufacturer->id]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
@stop