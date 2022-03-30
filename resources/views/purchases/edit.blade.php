@extends('adminlte::page')

@section('title', 'Purchase')

@section('content_header')
    <h1>Edit Purchase Info</h1>
@stop

@section('content')
<form method="post" action="{{ route('purchases.update', $purchase->id) }}" >
    @csrf
	<input type = "hidden" name ="_method" value = "put" />
    <x-adminlte-input name="invoice" label="Invoice Number" />
    <x-adminlte-input name="price" label="Price" />
	<x-adminlte-input name="purchasedate" label="Date of Purchase" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop