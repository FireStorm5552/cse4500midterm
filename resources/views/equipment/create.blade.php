@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('uzers.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="processor" label="Processor" />
	<x-adminlte-input name="ram" label="RAM" />
	<x-adminlte-input name="type" label="Type of Device" />
    <x-adminlte-input name="manufacturer_id" label="Manufacturer" />
	<select id = "manufacturer">
	<option>Select Manufacturer</option>
		@foreach($manufacturers AS manufacturer)
			<option value ="{{$manufacturer->id}}" {{$manufacturer->id == $equipment->manufacturer_id ? 'selected': ''}}> {{$manufacturer->name}}
			</option>
		@endforeach
	</select>
	<x-adminlte-input name="ram" label="RAM" />
	<x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="processor" label="Processor" />
	<x-adminlte-input name="ram" label="RAM" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop