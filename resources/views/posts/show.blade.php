@extends('layouts.app')

@section('content')

<p><a href="../"><button type="button" class="btn btn-primary">&lt;-- Back to all Posts</button></a></p>

<div class="row">
  <div class="col-lg-12">

	    <div class="card index-post-card">
				<article>
		      <div class="card-body">
		        <h3 class="card-title">{{ $post->title }}</h3>
		        <p class="card-text">{!! $post->body !!}</p>
		        <p><strong>Posted</strong>: {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
		        <p><strong>Updated</strong>: {{ $post->updated_at->diffForHumans() }}</p>
		      </div>
				</article>
	    </div>

    @if($post->user_id == Auth::id())

    <div class="row">

      <div class="col">
        <a href="/posts/{{ $post->id }}/edit">
          <button type="submit" class="btn btn-info form-control">Edit Post</button>
        </a>
      </div>

      <div class="col">
        <form action="/posts/{{ $post->id }}/delete" method="post">
          @csrf
          <button type="submit" class="btn btn-danger form-control">Delete this Post</button>
        </form>
      </div>
    </div>


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

              <p id="postCommentPreForm">{{ $comment->body }}</p>

            <form id="frmEditComment" action="/posts/{{ $post->id }}/comments/{{ $comment->id }}/update" method="post">
              {{ method_field('PATCH') }}

              @csrf

              <textarea name="body" class="form-control">{{ $comment->body }}</textarea>

              <div class="row">
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">
                  <button type="submit" class="btn btn-primary from-control">Update Comment Now</button>
                </div>
              </div>

            </form>

          </blockquote>
          <div class="text-muted">
            {{ $comment->created_at->diffForHumans() }}
          </div>
          @if($comment->user_id == Auth::id())

            <div class="row">

              <div class="col comment-controls">

                <div class="row">
                  <div class="col-sm">
                    <button type="button" id="btnEditComment" class="btn btn-info form-control">Edit Comment</button>
                  </div>
                  <div class="col-sm">
                    <form action="/posts/{{ $post->id }}/comments/{{ $comment->id }}/delete" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger form-control">Delete Comment</button>
                    </form>
                  </div>
                </div>

              </div>

            </div>

          @endif
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
        <textarea class="form-control" name="body" rows="3" placeholder="Your comments..." required>{{ old('body') }}</textarea>
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
