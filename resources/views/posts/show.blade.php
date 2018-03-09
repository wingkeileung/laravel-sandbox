@extends('layouts.app')

@section('content')
  <main role="main" class="container">
    <a href="/posts" class="btn btn-default mt-4">Go Back</a>
    <h1 class="mt-5">{{$post->title}}</h1>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <div>
          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
          
          {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
        </div>
      @endif
    @endif
  </main>
  @endsection