
@extends('layouts.main')


@section('container')
<h1 class="mb-5">Post Category : {{ $category }}
   
@foreach ($posts as $post)
<article class="mb-5">
  <h2> <a href="/posts/{{ $post->slug}}">{{ $post->title  }}</a></h2>
  <h5>BY : {{ $post->author }}</h5>
  <p>{{ $post->excerpt }}<p>
</article>
@endforeach

@endsection