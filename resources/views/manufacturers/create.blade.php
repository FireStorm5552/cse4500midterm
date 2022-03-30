@extends('adminlte::page')

@section('title', 'Manufacturers')

@section('content_header')
    <h1>Manufacturers</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="salesphone" label="Sales Phone Number" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
		<small>Format: 123-456-7890</small>
	<x-adminlte-input name="salesemail" label="Sales Email Address" type="email" />
	<x-adminlte-input name="techphone" label="Tech Support Phone Number" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
		<small>Format: 123-456-7890</small>
	<x-adminlte-input name="techemail" label="Tech Support Email Address" type="email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop