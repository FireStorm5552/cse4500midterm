@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('uzers.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="email" label="Email" />
	<x-adminlte-input name="phone" label="Phone Number" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop