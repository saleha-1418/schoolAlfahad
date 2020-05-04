@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit about
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
    <form method="post" action="{{ route('abouts.update', $abouts->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name_Image:</label>
              <input type="text" class="form-control" name="name_image" value="{{$abouts->name}}"/>
          </div>
          <div class="form-group">
              <label for="price">Image:</label>
              <input type="text" class="form-control" name="image" value="{{$abouts->email}}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update about</button>
      </form>
  </div>
</div>
@endsection