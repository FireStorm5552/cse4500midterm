@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('uzers.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="email" type="email" label="Email" />
	<x-adminlte-input name="phone" type="tel" label="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>\
	<small>Format: 123-456-7890</small>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop