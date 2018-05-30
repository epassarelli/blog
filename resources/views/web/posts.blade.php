@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-12">
		<h1>Lista de articulos</h1>
		
		@foreach($posts as $post)
			<div class="card">
				
				@if($post->file)
					<img class="card-img-top" src="{{ $post->file }}" alt="{{ $post->name }}">
				@endif				
				
				<div class="card-body">
					<h3 class="card-title"> {{ $post->name }} </h3>
					<p>{{ $post->excerpt }}</p>
					<a href="#" class="pull-right">Leer mas</a>
				</div>

			</div>
		@endforeach
		{{ $posts->render() }}

	</div>

</div>

@endsection