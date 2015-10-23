@extends('master')

@section('title')
Posts List
@stop

@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-warning">Add New Category</a>
<table class="table">
  <thead>
    <tr>
      <td>Title</td>
      <td></td>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
        <tr>
          <td><a href="/categories/{{ $category->id }}">{{ $category->title }}</a></td>
          <td>
            {!! Form::model($category, array('route' => array('categories.destroy', $category->id), 'method' => 'delete')) !!}
              <a href="{{ route('categories.edit', ['categories'=>$category->id]) }}">Edit</a>
              {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger js-submit-confirm']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

@stop
