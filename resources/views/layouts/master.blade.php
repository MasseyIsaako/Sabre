<!DOCTYPE html>
<html>
	<head>
		<title> @yield("title") | SABRE</title>
		{{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}

		{{-- META TAGS --}}
		<meta charset="utf-8">
		<meta name="description" content="@yield("description")">
		<meta name="author" content="@yield("author")">
		<meta name="keywords" content="@yield("keywords")">

		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/home-style.min.css') }}"> --}}
		<link rel="stylesheet" type="text/css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" crossorigin="anonymous">
		@yield("styles")
	</head>

	<body>

		<div id="wrapper">
			
			{{-- HEADER FOR NAV AND BRAND --}}
			@include("partials._nav")

			<!-- ALL CONTENT DISPLAYED BELOW, BUT REFERENCED THROUGH THIS MASTER TEMPLATE -->
			@yield("content")

			@include("partials._footer")

		</div>

		{{-- <script type="text/javascript" src="/js/script.js"></script> --}}
		@yield("scripts")
	</body>
</html>