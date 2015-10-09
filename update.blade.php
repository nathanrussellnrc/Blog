@extends ("article")

@section ("id")
	{{$row->id}}
@stop

@section ("title")
	{{$row->title}}
@stop

@section ("articleButton")
	@include ("view.articleButtonAccordion")
@stop

@section ("body")
	{{$row->body}}
@stop