@extends('layout')

@section('content')
</br>
</br>
</br>

<div align="right">
	<a href="{{ route('abouts.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
	    <th width="5%"> sort </th>
		<th width="10%">Image</th>
		<th width="35%"> Name Image </th>
		<th width="30%">Action</th>
	</tr>
	@foreach($abouts as $about)
		<tr>
	    	<td>{{ $about->sort }}</td>
			<td><img src="{{ URL::to('/') }}/images/{{ $about->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $about->name_image }}</td>

			<td>
				
				<form action="{{ route('abouts.destroy', $about->id) }}" method="post">
					<a href="{{ route('abouts.show', $about->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $abouts->links() !!}
@endsection