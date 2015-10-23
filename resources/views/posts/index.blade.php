@extends('master')

@section('title')
Posts List
@stop

@section('content')

<table class="table">
  <thead>
    <tr>
      <td>Title</td>
      <td>Content</td>
      <td>Category</td>
      <td></td>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
        <tr>
          <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
          <td>{{ str_limit($post->content, 20) }}</td>
          <td>{{ $post->category->title }}</td>
          <td>
            {!! Form::model($post, array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}
              <a href="{{ route('posts.edit', ['posts'=>$post->id]) }}">Edit</a>
              {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger js-submit-confirm']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

{!! $posts->render() !!}

@stop
