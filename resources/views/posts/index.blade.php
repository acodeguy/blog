@extends('layouts.app')

@section('content')

<!-- main content -->
<div class="row">
  <div class="col-lg-12">
    @if(count($posts))
      @foreach($posts as $post)
        <div class="card index-post-card">
          <div class="card-body">
            <a href="/posts/{{ $post->id }}"><h3 class="card-title">{{ $post->title }}</h3></a>
            <p class="card-text">{{ substr($post->body,0,255) }}. . .</p>
            <p>{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
            <a href="/posts/{{ $post->id }}">
              <button class="btn btn-primary" type="button" name="button">Read more...</button>
            </a>
          </div>
        </div>
      @endforeach
    @else
      <h3>No posts to show you, bro.</h3>
    @endif
  </div>
</div>

@endsection
