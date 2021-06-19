@extends('layouts.user.app')

@section('content')
  <ul>
    @foreach($posts as $post)
      <li>
        {{ $post->title }}<br>
        <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px">
      </li>
    @endforeach
  </ul>
@endsection
