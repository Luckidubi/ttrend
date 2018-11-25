@extends('layouts.fine')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      @if(count($posts)> 0)
                    <h2>Blog Posts
                    <a class="btn btn-success float-right" href="/posts/create">Create Posts</a> </h2> 
               
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a> </td>
                            <td><form action="/posts/{{$post->id}}" method="POST" class="float-right">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Delete" class="btn btn-danger" ></form></td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No post found</h3>
                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
