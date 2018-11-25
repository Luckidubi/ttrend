@extends('layouts.fine')

@section('content')
	
	<div class="container">
	<h1>Edit Posts</h1>	
	<div class="card">
		<div class="card-body">
		<form action="/posts/{{$posts->id}}" method="POST">
			<input type="hidden" name="_method" value= "PUT"/>
			{{csrf_field()}}
			<div class="form-group">
				<label>Post Title:</label>
				<input type="text" class="form-control" name="title" value="{{$posts->title}}" >
			</div>
			<div class="form-group">
				<label>Post Content:</label>
				<textarea class="form-control" cols="5" rows="10" name="body"  id="article-ckeditor">{!!$posts->body!!}</textarea>
			</div>
			
			<input type="submit" name="submit" class="btn btn-success" value="Update Post">
			


		</form>

	</div>
	</div>					

</div>
	

@endsection