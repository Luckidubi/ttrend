@extends('layouts.fine')

@section('content')

	<h1 class="display-2 text-center">Posts</h1>
@if(count($posts)> 0)
@foreach($posts as $post)
	
	<div class="container">
	<div class="card text-center py-4">
		<div class="card-header bg-default">
			<h1 class="display-5"><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h1>
		</div>
		<div class="card-body">
		{{-- <p class="card-text lead">{!!$post->body!!}</p>
		</div> --}}
	
		<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

	</div>
	</div>
<br><br>
	@endforeach
<p>{{$posts->links()}}</p>
@else 
<h1>No Posts Found</h1>
	

	
@endif






@endsection