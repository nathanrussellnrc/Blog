@extends "master"

@section "content"
	@foreach ($results as $row)
		@include ("view.update")
	@endforeach
@endsection