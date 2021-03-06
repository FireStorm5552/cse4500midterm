@extends('adminlte::page')

@section('title', 'Manufacturers List')

@section('content_header')
    <h1>Manufacturers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th>
        </tr>
      </thead>
      <tbody>

        @foreach($manufacturers AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturers.show',['manufacturer'=>$manufacturer->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop