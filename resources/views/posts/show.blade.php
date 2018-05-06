@extends('layouts.app')

@section('content')

<p><a href="../"><button type="button" class="btn btn-primary">&lt;-- Back to all Posts</button></a></p>

<div class="row">
  <div class="col-lg-12">
    <div class="card index-post-card">
      <div class="card-body">
        <h3 class="card-title">{{ $post->title }}</h3>
        <p class="card-text">{{ $post->body }}</p>
        <p>{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
      </div>
    </div>

    @if($post->user_id == Auth::id())
    <!-- deletion form -->
    <form action="/posts/{{ $post->id }}/delete" method="post">
      @csrf
      <button type="submit" class="btn btn-danger form-control">Delete this Post</button>
    </form>
    @endif

    <!-- comments -->
    @if(count($post->comments))
      <div class="card-header" id="comments-title">
        <h5>comments</h5>
      </div>

      <!-- list old comments -->
      @foreach ($post->comments as $comment)
      <div class="card comment-card">
        <div class="card-header">
          {{ $comment->user['name'] }}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $comment->body }}</p>
          </blockquote>
          <div class="text-muted">
            {{ $comment->created_at->diffForHumans() }}
          </div>
          <div class="comment-controls">
            <form action="/posts/{{ $post->id }}/comments/delete/{{ $comment->id }}" method="post">
              @csrf
              <button type="submit" class="btn btn-danger">Delete Comment</button>
            </form>
          </div>
        </div>
        </div>
      @endforeach

    @endif

    <!-- new comment area -->
    <p></p>
    <h3>Add Your Own Comments</h3>
    @if(Auth::id())

    <form action="/posts/{{ $post->id }}/comments" method="post">
      @csrf
      <div class="form-group">
        <textarea class="form-control" name="body" rows="3" placeholder="Your comments..." required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Add Comments</button>
      </div>

    </form>

  @else
    <p>
      <a href="/login">
        <button type="button" class="btn btn-primary form-control">You must login first.</button>
      </a>
    </p>

    @endif
    </div>
  </div>

@endsection
