@extends('adminlte::page')

@section('title', 'Edit Manufacturer')

@section('content_header')
    <h1>Edit Manufacturer</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.update', $manufacturers->id) }}" >
    @csrf
	<input type = "hidden" name ="_method" value = "put" />
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="salesphone" label="Sales Phone Number" type = "tel"/>
	<x-adminlte-input name="salesemail" label="Sales Email Address" type = "email"/>
	<x-adminlte-input name="techphone" label="Tech Support Phone Number" type = "tel"/>
	<x-adminlte-input name="techemail" label="Tech Support Email Address" type = "email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop