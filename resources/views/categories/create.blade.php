@extends('master')

@section('content')
{!! Form::open(['route' => 'categories.store']) !!}

  @include('errors._validation')

  <legend>New Category</legend>

  @include('categories._form')

  {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
