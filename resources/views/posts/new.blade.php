@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12">

    <form action="/posts" method="post">
      @csrf
      <div class="card index-post-card">
        <div class="card-title">
          <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Military Intelligence" required>
        </div>
        <div class="card-body">
          <p class="card-text">
          <textarea name="body" id="summernote" rows="15" class="form-control" placeholder="Two words combined that can't make sense..." spellcheck="true" required>{{ old('body') }}</textarea>
          </p>
        </div>
        <input type="submit" class="form-control btn btn-primary" value="Submit this Post">
      </div>
    </form>
  </div>
</div>

<script src="/lib/summernote/summernote-bs4.min.js"></script>
<script>
$(document).ready(function(){

$('#summernote').summernote(
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
);

});
</script>
@endsection
