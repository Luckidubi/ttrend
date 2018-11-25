@extends('layouts.fine')

@section('content')
	
	<div class="container">
	<h1>Create Posts</h1>	
	<div class="card">
		<div class="card-body">
		<form action="{{route('posts.store')}} " method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label>Post Title:</label>
				<input type="text" class="form-control" name="title">
			</div>
			<div class="form-group">
				<label>Post Content:</label>
				<textarea class="form-control" cols="5" rows="10" name="body" id="article-ckeditor"></textarea>
			</div>
			<input type="submit" name="submit" class="btn btn-success" value="Create Post">
			



		</form>

	</div>
	</div>					

</div>
	

@endsection