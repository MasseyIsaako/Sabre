{{--  --}}
@extends("layouts.master")

@section("styles")
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/home-style.min.css') }}">
@endsection
@section("title", "Contact")
@section("description", "This is a custom CMS made from Laravel")
@section("author", "Massey Isa'ako")
@section("keywords", "Hello, there, person")

	@section("content")
		<div class="container">
			{{-- MAIN CONTENT DISPLAYED BELOW --}}
			<h1>CONTACT</h1>
		</div>
	@endsection

	@section("scripts")

	@endsection