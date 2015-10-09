@extends ("article")

@section ("id")
	{{$row->id}}
@endsection

@section ("title")
	{{$row->title}}
@endsection

@section ("articleButton")
	@include ("view.articleButtonAccordion")
@endsection

@section ("body")
	{{$row->body}}
@endsection