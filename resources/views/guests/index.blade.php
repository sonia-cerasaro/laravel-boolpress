@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    @foreach ($posts as $post)
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          {{ $post->title}}
        </div>
        <div class="card-body">
          {{ $post->content }}
          <a href="{{route('posts.show', ['slug' => $post->slug])}}">
            Read More
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-md-8">

    <form class="" action="{{route('contact')}}" method="post">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="name">
          Nome
        </label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="title" value="{{ old('name') }}">
        @error('name')
          <small class="text-danger">
            {{ $message }}
          </small>
        @enderror
      </div>

      <div class="form-group">
        <label for="title">
          Title
        </label>
        <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ old('title') }}">
        @error('title')
          <small class="text-danger">
            {{ $message }}
          </small>
        @enderror
      </div>

      <div class="form-group">
        <label for="email">
          Email
        </label>
        <textarea class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email">
          {{ old('Email') }}
        </textarea>
        @error('Email')
          <small class="text-danger">
            {{ $message }}
          </small>
        @enderror
      </div>

      <div class="form-group">
        <label for="subject">
          Subject
        </label>
        <textarea class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject">
          {{ old('subject') }}
        </textarea>
        @error('subject')
          <small class="text-danger">
            {{ $message }}
          </small>
        @enderror
      </div>

      <div class="form-group">
        <label for="content">
          Message
        </label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">
          {{ old('content') }}
        </textarea>
        @error('content')
          <small class="text-danger">
            {{ $message }}
          </small>
        @enderror
      </div>
      <button class="btn btn-primary" type="submit" name="button">Send</button>
    </form>

  </div>
</div>


@endsection
