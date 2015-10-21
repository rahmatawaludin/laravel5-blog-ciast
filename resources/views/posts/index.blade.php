@extends('master')

@section('content')

<table class="table">
  <thead>
    <tr>
      <td>Title</td>
      <td>Content</td>
      <td>Category</td>
    </tr>
  </thead>
  <tbody>
    @foreach (App\Post::all() as $post)
        <tr>
          <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
          <td>{{ str_limit($post->content, 20) }}</td>
          <td>{{ $post->category->title }}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@stop
