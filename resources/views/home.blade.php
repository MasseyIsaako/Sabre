@extends('layouts.master')

@section("styles")
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/home-style.min.css') }}">
@endsection
@section("title", "Home")
@section("description", "This is a custom CMS made from Laravel")
@section("author", "Massey Isa'ako")
@section("keywords", "Hello, there, person")

@section('content')
<div id="main-image">
	<h1 class="animated fadeInUp">WELCOME TO SABRE</h1>
</div>

@endsection
