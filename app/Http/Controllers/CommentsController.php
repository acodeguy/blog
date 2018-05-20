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

    public function update(Post $post, Request $new_data)
    {

      $validatedData = $new_data->validate([
        'body' => 'required|min:5|max:1024'
      ]);

      $post->updateComment($new_data->body);

      session()->flash('message','Comment updated!');

      return back();
    }

    public function delete(Request $comment)
    {
      $commendId = request('comment');
      Comment::find($commendId)->delete();

      session()->flash('message','Comment deleted!');

      return back();
    }
}
