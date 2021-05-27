@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          {{ $post->title}}
        </div>
        <div class="card-body">
          {{$post->content}}
          <a href="route('posts.show', ['slug =>$post->slug'])">
            Read More
          </a>
          <a href="{{route('posts.index')}}">Back</a>
          <a href="{{route('home')}}">Home</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
