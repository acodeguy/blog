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
      $post = Post::findOrFail($id);

      return view('posts.show', compact('post'));
    }

    public function edit($post)
    {
      $post = Post::findOrFail($post);

      return view('posts.edit',compact('post'));
    }

    public function update($post, Request $new_data)
    {
      $validatedData = $new_data->validate([
        'title' => 'required|min:5|max:255',
        'body' => 'required|min:5|max:21844',
      ]);

      $p = Post::findOrFail($post);
      $p->title = $new_data->title;
      $p->body = $new_data->body;
      $p->save();

      session()->flash('message','Post updated');

      return redirect("/posts/$p->id");
    }

    public function delete($id)
    {

      $post = Post::findOrFail($id);

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

      $validatedData = $post->validate([
        'title' => 'required|min:5|max:255',
        'body' => 'required|min:5|max:21844',
      ]);

      $new_post = new Post;
      $new_post->title = $post->title;
      $new_post->body = $post->body;
      $new_post->user_id = \Auth::id();
      $new_post->save();

      session()->flash('message','Post submitted!');

      return redirect('/posts');
    }
}
