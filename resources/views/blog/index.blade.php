{{--  --}}
@extends("layouts.master")

@section("styles")
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/home-style.min.css') }}">
@endsection
@section("title", "Blog")
@section("description", "This is a custom CMS made from Laravel")
@section("author", "Massey Isa'ako")
@section("keywords", "Hello, there, person")

	@section("content")

	<div class="container">
			{{-- MAIN CONTENT DISPLAYED BELOW --}}
			<h1>BLOG</h1>

			@if(Auth::user())
				<a href="{{ route('blog.create') }}">Create Content</a>
			@endif

			<div class="row">
				<div class="content-container" style="background-color:blue">
					<div class="image-container">
						<img src="https://images.unsplash.com/photo-1451976426598-a7593bd6d0b2?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
					</div>
				</div>
				<div class="content-container" style="background-color:indigo">
					<div class="image-container">
						<img src="https://images.unsplash.com/photo-1451976426598-a7593bd6d0b2?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
					</div>
				</div>
				<div class="content-container" style="background-color:violet">
					<div class="image-container">
						<img src="https://images.unsplash.com/photo-1451976426598-a7593bd6d0b2?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
					</div>
				</div>
			</div>
	</div>
	@endsection

	@section("scripts")

	@endsection