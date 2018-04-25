<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    //

    public function store(Post $post)
    {

      $post->addComment(request('body'));

      session()->flash('message','Comment added!');

      return back();
    }
}
