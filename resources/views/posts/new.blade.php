@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12">

    @if($errors->any())
      <div class="alert alert-danger error">
        <p>Sort out the below errors and we'll be good to go, buddy:</p>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="" action="/posts" method="post">
      @csrf
      <div class="card index-post-card">
        <div class="card-title">
          <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Military Intelligence" required>
        </div>
        <div class="card-body">
          <p class="card-text">
          <textarea name="body" rows="15" class="form-control" placeholder="Two words combined that can't make sense..." spellcheck="true" required>{{ old('body') }}</textarea>
          </p>
        </div>
        <input type="submit" class="form-control btn btn-primary" value="Submit this Post">
      </div>
    </form>
  </div>
</div>
@endsection
