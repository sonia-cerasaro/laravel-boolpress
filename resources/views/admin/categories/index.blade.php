@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.categories.create')}}">
        New Category
      </a>
    </div>
  </div>
    <div class="row justify-content-center">
      @foreach ($categories as $category)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                  {{$category->name}}
                </div>
                <div class="card-body">

                  <div class="">
                    <a href="{{route('admin.categories.edit', ['category' => $category->id])}}">
                      Edit
                    </a>
                  </div>
                  <div class="">
                    <a href="{{route('admin.categories.show', ['category' => $category->id])}}">
                      Show
                    </a>
                  </div>
                  <form class="" action="{{route('admin.categories.destroy', ['category'=> $category->id])}}" method="POST" style="display:none">
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
