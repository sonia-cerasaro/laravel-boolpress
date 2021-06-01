@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.tags.create')}}">
        New tag
      </a>
    </div>
  </div>
    <div class="row justify-content-center">
      @foreach ($tags as $tag)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                  {{$tag->name}}
                </div>
                <div class="card-body">

                  <div class="">
                    <a href="{{route('admin.tags.edit', ['tag' => $tag->id])}}">
                      Edit
                    </a>
                  </div>
                  <div class="">
                    <a href="{{route('admin.tags.show', ['tag' => $tag->id])}}">
                      Show
                    </a>
                  </div>
                  <form class="" action="{{route('admin.tags.destroy', ['tag'=> $tag->id])}}" method="POST" style="display:none">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                  </form>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
