<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    protected $fillable = ['title','body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
      Comment::create([
          'body' => $body,
          'post_id' => $this->id,
          'user_id' => \Auth::id()
      ]);

    }

    public function updateComment($body)
    {
      $comment = Comment::findOrFail(request('comment'));
      $comment->body = $body;
      $comment->save();
    }
}
