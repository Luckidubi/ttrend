@extends('layouts.fine')

@section('content')
	
	<div class="container">
		<a class="btn btn-secondary my-4" href="/posts">Go Back</a>
	<div class="card text-center py-4">
		<div class="card-header">
			<h1 class="display-5">{{$posts->title}}</h1>
		</div>
		<div class="card-body">
		<p class="card-text lead">{!!$posts->body!!}</p>
		</div>
	
		<small>Written on {{$posts->created_at}} by {{$posts->user->name}}</small>

	</div>
	<a class="btn btn-primary my-3" href="/posts/{{$posts->id}}/edit">Edit</a>
	<form action="/posts/{{$posts->id}}" method="POST" class="float-right">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="Delete" class="btn btn-danger my-3" >
		

	</form>
</div><br><br>
	

@endsection