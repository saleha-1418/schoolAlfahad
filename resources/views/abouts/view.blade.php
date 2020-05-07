@extends('layout')

@section('content')
<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('abouts.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $abouts->image }}" class="img-thumbnail" />
	<h3> Name:{{ $abouts->name_image }} </h3>
</div>
@endsection