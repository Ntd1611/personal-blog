@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-secondary">Go Back</a>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>


  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
  <hr>
  <small>Written on {{$post->created_at}}</small> <br>

  @if(!Auth::guest())
    @if(Auth::user()->id = $post->user_id)
      {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  @endif
@endsection