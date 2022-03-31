@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
  <h2>Equipment Name: {{ $note->equipment->name; }}</h2>
  <h2>Services: {{ $note->services; }}</h2>
  <h2>Software: {{ $note->software; }}</h2>
  <h2>Notes: {{ $note->notes; }}</h2>
  <a href="{{ route('notes.edit', ['note'=>$note->id]) }} " class="btn btn-warning">Update</a>
  <a href="{{ route('notes.destroy',['note'=>$note->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
  Delete</a>
  <form id="submit-form" action="{{ route('note.destroy',['note'=>$note->id]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
@stop