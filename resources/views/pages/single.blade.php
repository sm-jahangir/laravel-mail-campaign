@extends('layouts.app')
@section('content')
	<div class="container">
		<img class="img-fluid" src="{{ asset('storage/page') . '/' . $pages->image }}" alt="single-img">
		<h1>{{ $pages->title }}</h1>
		<div>{!! $pages->body !!}</div>
	</div>
@endsection
