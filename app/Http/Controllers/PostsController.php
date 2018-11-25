<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$posts = Post::all();
        //$posts = DB::select('SELECT * FROM posts');
       // $posts = Posts::orderNy('title', 'desc')->take(1)->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        //$posts = Post::orderBy('title', 'desc')->get();
     return view('posts.index')->with('posts', $posts);   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
      ]);
      $post = new Post;
      $post->title = $request->input('title');
      $post->user_id = auth()->user()->id;
      $post->body = $request->input('body');
      $post->save();

      return redirect('/posts')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show')->with('posts', $posts); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $posts = Post::find($id);
        return view('posts.edit')->with('posts', $posts);   //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
      ]);
      $posts =  Post::find($id);
      $posts->title = $request->input('title');
      $posts->body = $request->input('body');
      $posts->save();

      
      return redirect('/posts')->with('success', 'Post updated Successfully'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $posts = Post::find($id);
       $posts->delete($id);
        return redirect('/posts')->with('success', 'Post deleted Successfully');
         //
    }
}
