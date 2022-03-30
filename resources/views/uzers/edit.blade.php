@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('uzers.update', $uzer->id) }}" >
    @csrf
	<input type = "hidden" name ="_method" value = "put" />
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="email" label="Email" type = "email"/>
	<x-adminlte-input name="phone" label="Phone Number" type = "tel"/>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop