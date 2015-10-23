@extends('master')

@section('content')
{!! Form::open(['route' => 'posts.store']) !!}

  @include('errors._validation')

  <legend>New Post</legend>

  @include('posts._form')

  {!! Form::submit('Publish', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
