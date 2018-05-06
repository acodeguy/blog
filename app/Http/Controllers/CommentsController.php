<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

      $post->addComment(request('body'));

      session()->flash('message','Comment added!');

      return back();
    }

    public function delete(Request $comment)
    {
      $comment_id_to_be_deleted = request('comment');
      Comment::find($comment_id_to_be_deleted)->delete();

      session()->flash('message','Comment deleted!');

      return back();
    }
}
