@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('purchases.store') }}" >
    @csrf
    <x-adminlte-input name="invoice" label="Name" />
    <x-adminlte-input name="price" label="Email" />
	<x-adminlte-input name="purchasedate" label="Phone Number" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop