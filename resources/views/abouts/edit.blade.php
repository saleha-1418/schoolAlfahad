@extends('layout')

@section('content')
<div align="right">
	<a href="{{ route('abouts.index') }}" class="btn btn-default">Back</a>
</div>
<br />
<style>
  .uper {
    margin-top: 40px;
  }
</style>

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

              <label for="name">Enter Name</label>
              <input type="text" class="form-control" name="name_image" value="{{$abouts->name}}"/>
              <div class="form-group">
              </br>
              </br>
              </br>
         <label for="name">sort</label>
              <input type="int" class="form-control" name="sort" value="{{$abouts->sort}}"/>
              <div class="form-group">
              </br>
              </br>
              </br>
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $abouts->image }}" class="img-thumbnail" width="100" />
		</div>
                 
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection