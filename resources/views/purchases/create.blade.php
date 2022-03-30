@extends('adminlte::page')

@section('title', 'Purchases')

@section('content_header')
    <h1>Create Purchase</h1>
@stop

@section('content')
<form method="post" action="{{ route('purchases.store') }}" >
    @csrf
    <x-adminlte-input name="invoice" label="Invoice Number" />
    <x-adminlte-input name="price" label="Price" />
	<x-adminlte-input name="purchasedate" label="Date of Purchase" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop