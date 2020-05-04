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
    Add About
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
      <form method="post" action="{{ route('about.store') }}">
          <div class="form-group">
              @csrf
              <label for="name"> Name_Image:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Image :</label>
              <input type="varchar(255)" class="form-control" name="image"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Create about</button>
      </form>
  </div>
</div>
@endsection