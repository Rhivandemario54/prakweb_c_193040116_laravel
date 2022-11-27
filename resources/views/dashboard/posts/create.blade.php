@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/posts" class="mb-5">
  <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="tittle" class="form-label">Title</label>
@@ -25,7 +25,7 @@
      <div class="invalid-feedback">
        {{ $message }}
      </div>
  @enderror
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
@@ -40,6 +40,15 @@
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Post Image</label>
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
        <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>
<script>
  const title = document.querySelector('#tittle');
  const slug = document.querySelector('#slug');
  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault;
  });
</script>
@endsection