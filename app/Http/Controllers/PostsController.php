<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use \App\Auth;

class PostsController extends Controller
{
    //

    public function index()
    {

      $posts = Post::latest()->get();

      return view('posts.index', compact('posts'));
    }

    public function show($id)
    {

      $post = Post::find($id);

      return view('posts.show', compact('post'));
    }

    public function delete($id)
    {

      $post = Post::find($id);

      $this_posts_comments = $post->comments()->delete();

      $post->delete();

      session()->flash('message','Post deleted');

      return redirect('/posts');

    }

    public function new()
    {

      return view('posts.new');
    }

    public function store(Request $post)
    {
      
      $new_post = new Post;
      $new_post->title = $post->title;
      $new_post->body = $post->body;
      $new_post->user_id = \Auth::id();
      $new_post->save();

      session()->flash('message','Post submitted!');

      // redirect back to index
      return redirect('/posts');
    }
}
