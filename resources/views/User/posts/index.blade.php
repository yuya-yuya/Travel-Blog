@extends('layouts.user.app')

@section('content')
  <ul class="card-deck" style="list-style: none;">
    @foreach($posts as $post)
      <li style="margin-bottom: 30px;">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
              <p style="margin-bottom: -10px;">{{ $post->title}}</p>
            </a><br>
            <p style="font-size: 12px; margin-bottom: -5px;">posted by {{ $post->user->name }}</p>
          </div>
          <div class="card-body">
            {{ $post->body }}<br>
            <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px">
          </div>
          <div class="card-footer">
            <p style="font-size: 12px;">都市名:{{ $post->cityname->name}}</p>
            <p style="font-size: 12px; margin-bottom: -10px;">ジャンル名:{{ $post->genre->name}}</p><br>
            @if(Auth::id() === $post->user_id)
              <form method="POST" action="{{ route('user.posts.delete', ['id' => $post->id]) }}">
                @csrf
                <button type="submit">削除</button>
              </form>
            @endif
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection
