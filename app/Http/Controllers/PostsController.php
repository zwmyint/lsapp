<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    // php artisan make:controller PostsController --resource

    // index
    // create
    // store
    // edit
    // update
    // show
    // destroy

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // method
        //return Post::where('title','Post Two')->get();
        //return Post::orderBy('title','desc')->take(1)->get();

        //$posts = Post::all();
        //$posts = DB::select('SELECT * FROM posts ORDER BY id DESC');

        //$posts = Post::orderBy('title','desc')->paginate(1);

        $posts = Post::orderBy('created_at','desc')->get();
        return view('posts.index')->with('posts', $posts);

        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('posts.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create New Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Created ...');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //return Post::find($id);
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
        //
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
        //
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create New Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated ...');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed ...');
        //
    }

    //
}
