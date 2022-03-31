@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
  <h2>Name: {{ $equipment->name; }}</h2>
  <h2>Processor: {{ $equipment->processor; }}</h2>
  <h2>RAM: {{ $equipment->ram; }}</h2>
  <h2>Type: {{ $equipment->type; }}</h2>
  <h2>Manufacturer: {{ $equipment->manufacturer->name; }}</h2>
  <a href="{{ route('equipment.edit', ['equipment'=>$equipment->id]) }} " class="btn btn-warning">Update</a>
  <a href="{{ route('equipment.destroy',['equipment'=>$equipment->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
  Delete</a>
  <form id="submit-form" action="{{ route('equipment.destroy',['equipment'=>$equipment->id]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
@stop