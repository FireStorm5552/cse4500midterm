@extends('adminlte::page')

@section('title', 'Purchases')

@section('content_header')
    <h1>Purchases</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Invoice #</th>
        </tr>
      </thead>
      <tbody>

        @foreach($purchases AS $purchase)
        <tr>
          <td>{{ $purchase->id }}</td>
          <td>{{ $purchase->invoice }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('purchases.show',['purchase'=>$purchase->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('purchases.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop