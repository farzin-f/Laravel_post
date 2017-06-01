<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

    public function __construct()
    {
      /* Authenticate every thing except index and show views */
      $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
      /*latest() to get the latest post according to the created_at*/
      $posts = Post::latest()->get();
      return view('posts/index', compact('posts'));
    }

    public function show(Post $post)
    {
      return view('posts/show', compact('post'));
    }

    public function create()
    {
      return view('posts/create');
    }

    public function store()
    {
      // dd(request()->all());
      // other opteions:
      // dd(request('body'));
      // dd(request(['title', 'body']));

      $this->validate(request(),[
        'title' => 'required|max:25',
        'body' => 'required'
      ]);

      // create a new post
      // $post = new Post;
      // $post->title = request('title');
      // $post->body = request('body');

      // save to DB
      // $post->save();

      /* Create and Save both with create method*/
      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body'),
      //   'user_id' => auth()->id()
      // ]);

      /* The user_id automatically is applied inside publish method of User
      * by calling save method
      */
      auth()->user()->publish(new Post(request(['title', 'body'])));


      /* Another way without user_id */
      // Post::create(request(['title', 'body']));




      // redirect user to another home page
      return redirect('/posts');

    }

}
