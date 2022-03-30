@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>Invoice Number: {{ $purchase->invoice; }}</h2>
  <h2>Price: {{ $purchase->price; }}</h2>
  <h2>Purchase Date: {{ $purchase->purchasedate; }}</h2>
  <a href="{{ route('purchases.edit', ['purchase'=>$purchase->id]) }} " class="btn btn-warning">Update</a>
  <a href="{{ route('purchases.destroy',['purchase'=>$purchase->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
  Delete</a>
  <form id="submit-form" action="{{ route('purchases.destroy',['purchase'=>$purchase->id]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
@stop