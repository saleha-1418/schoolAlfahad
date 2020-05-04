<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add User
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
      <form method="post" action="{{ route('users.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">User Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="varchar(255)" class="form-control" name="email"/>
          </div>
         
          <div class="form-group">
              <label for="price">password :</label>
              <input type="varchar(255)" class="form-control" name="password"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Create User</button>
      </form>
  </div>
</div>
@endsection