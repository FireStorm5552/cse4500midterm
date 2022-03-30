@extends('adminlte::page')

@section('title', 'Equipment List')

@section('content_header')
    <h1>Equipment</h1>
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

        @foreach($equipment AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipment.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipment.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop