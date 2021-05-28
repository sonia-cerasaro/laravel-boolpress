@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          {{ $post->title}}
        </div>
        <h3>Category:
          @if ($post->category)
          {{$post->category->name}}
          @endif
        </h3>
        <div class="card-body">
          {{$post->content}}

          <a href="{{route('admin.posts.index')}}">
            Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
