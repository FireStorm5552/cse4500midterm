@extends('adminlte::page')

@section('title', 'User List')

@section('content_header')
    <h1>Users</h1>
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

        @foreach($uzers AS $uzer)
        <tr>
          <td>{{ $uzer->id }}</td>
          <td>{{ $uzer->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('uzers.show',['uzer'=>$uzer->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('uzers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop