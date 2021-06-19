@extends('layouts.user.app')

@section('content')
  <ul>
    @foreach($posts as $post)
      <li>
        {{ $post->user->name }}<br>
        <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
          {{ $post->title}}
        </a><br>
        {{ $post->body }}
        <p>都市名:{{ $post->cityname->name}}</p>
        <p>ジャンル名:{{ $post->genre->name}}</p>
        <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px">
        @if(Auth::id() === $post->user_id)
          <form method="POST" action="{{ route('user.posts.delete', ['id' => $post->id]) }}">
            @csrf
            <button type="submit">削除</button>
          </form>
        @endif
      </li>
    @endforeach
  </ul>
@endsection
