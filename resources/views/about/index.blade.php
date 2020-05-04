<!-- index.blade.php -->

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
             <td>ID</td>
          <td>Name_Image</td>
          <td>Image</td> 
        </tr>
    </thead>
    <tbody>
    @foreach($abouts as $about)
        <tr>
            <td>{{$about->id}}</td>
            <td>{{$about->name_image}}</td>
            <td>{{$about->image}}</td>
         
            <td><a href="{{ route('abouts.edit',$about->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('abouts.destroy', $about->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection