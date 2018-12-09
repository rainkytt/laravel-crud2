@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Töötaja nimi</td>
          <td>Isikukood</td>
          <td>Sünniaasta ja kuupäev</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->share_name}}</td>
            <td>{{$employee->share_price}}</td>
            <td>{{$employee->share_qty}}</td>
            <td><a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-primary">Muuda</a></td>
            <td>
                <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Kustuta</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection