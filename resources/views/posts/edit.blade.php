@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12">

    <form action="/posts/{{ $post->id }}" method="post">
      {{ method_field('PATCH') }}
      @csrf
      <div class="card index-post-card">
        <div class="card-title">
          <input type="text" class="form-control" name="title" value="{{ old('title') != null ? old('title') : $post->title }}" placeholder="Military Intelligence" required>
        </div>
        <div class="card-body">
          <p class="card-text">
          <textarea name="body" rows="15" class="form-control" placeholder="Two words combined that can't make sense..." spellcheck="true" required>{{ old('body') != null ? old('body') : $post->body }}</textarea>
          </p>
        </div>
        <button type="submit" class="form-control btn btn-primary">Update this Post</button>
      </div>
    </form>
  </div>
</div>
@endsection
