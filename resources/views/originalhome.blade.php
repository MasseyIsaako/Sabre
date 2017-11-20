{{--  --}}
@extends("layouts.master")

@section("styles")
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/home-style.min.css') }}">
@endsection
@section("title", "Home")
@section("description", "This is a custom CMS made from Laravel")
@section("author", "Massey Isa'ako")
@section("keywords", "Hello, there, person")

	@section("content")
	{{-- MAIN CONTENT DISPLAYED BELOW --}}
			<div id="main-image">
				<h1>Home | Sabre</h1>
			</div>

	@endsection

	@section("scripts")
		<script type="text/javascript" src="/js/script.js"></script>
	@endsection