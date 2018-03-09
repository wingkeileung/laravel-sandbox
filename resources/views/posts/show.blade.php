@extends('layouts.app')

@section('content')
  <main role="main" class="container">
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1 class="mt-5">{{$post->title}}</h1>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
  </main>
@endsection