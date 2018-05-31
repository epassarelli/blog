@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-12">
		<h1>{{ $post->name }}</h1>
		<p>Categoria: <a href="{{ route('category', $post->category->slug)}}">{{ $post->category->name }}</a></p>
			<div class="card">
				
				@if($post->file)
					<img class="card-img-top" src="{{ $post->file }}" alt="{{ $post->name }}">
				@endif				
				
				<div class="card-body">
					<p>{{ $post->excerpt }}</p>
					<hr>
					{!! $post->body !!}
					<hr>
					Etiquetas:
					@foreach($post->tags as $tag)
						<a href="{{ route('tag', $tag->slug) }}">
							{{ $tag->name }}
						</a>
					@endforeach
				</div>

			</div>

	</div>

</div>

@endsection