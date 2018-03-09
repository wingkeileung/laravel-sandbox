@extends('layouts.app')

@section('content')
  <main role="main" class="container">
    <h1 class="mt-5">{{$title}}</h1>
    @if(count($services) > 0)
      <ul class="list-group">
        @foreach($services as $service)
          <li class="list-group-item">{{$service}}</li>
        @endforeach
      </ul>        
    @endif
  </main>
@endsection
