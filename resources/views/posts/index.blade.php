@extends('layouts.app')

@section('content')
  <main role="main" class="container">
    <h1 class="mt-5">Posts</h1>
    @if(count($posts) > 0)
      @foreach($posts as $post)
        <div class="well">
          <li class="list-group-item mt-4">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
          </li>
        </div>
      @endforeach
      {{$posts->links()}}
    @else
      <p>No posts found</p>
    @endif
  </main>
@endsection