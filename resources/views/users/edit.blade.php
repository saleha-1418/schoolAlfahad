@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br/>
    @endif
    <form method="post" action="{{ route('users.update', $users->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">User Name:</label>
              <input type="text" class="form-control" name="user_name" value="{{$users->name}}"/>
          </div>
          <div class="form-group">
              <label for="price">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$users->email}}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update User</button>
      </form>
  </div>
</div>
@endsection