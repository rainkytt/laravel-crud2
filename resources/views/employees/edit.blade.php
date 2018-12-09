@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Muuda töötajat
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('employees.update', $employee->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Töötaja nimi:</label>
          <input type="text" class="form-control" name="share_name" value={{ $employee->share_name }} />
        </div>
        <div class="form-group">
          <label for="price">Isikukood:</label>
          <input type="text" class="form-control" name="share_price" value={{ $employee->share_price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Sünniaasta ja kuupäev:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $employee->share_qty }} />
        </div>
        <button type="submit" class="btn btn-primary">Uuenda</button>
      </form>
  </div>
</div>
@endsection