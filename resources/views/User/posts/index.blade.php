@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <h3>投稿一覧</h3>
    </div>
  </div>
  @if(@posts == [])
    <p>投稿はまだありません</p>
  @else
    <ul class="card-deck" style="list-style: none;">
      @foreach($posts as $post)
        <li style="margin-bottom: 30px;">
          <div class="card" style="width: 300px; height: 500px;">
            <div class="card-header" style="width: 300px; height: 100px;">
              <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
                <p style="margin-bottom: -10px;">{{ $post->title}}</p>
              </a><br>
              <p style="font-size: 12px; margin-bottom: -5px;">posted by {{ $post->user->name }}</p>
            </div>
            <div class="card-body" style="width: 300px; height: 300px;">
              {{ $post->body }}<br>
              @if($post->post_image == Null)
                <img src="../../img/no_image_post.jpg" width="100px" height="100px">
              @else
                <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px">
              @endif
            </div>
            <div class="card-footer" style="width: 300px; height: 100px;">
              <p style="font-size: 12px;">都市名:{{ $post->cityname->name}}</p>
              <p style="font-size: 12px; margin-bottom: -10px;">ジャンル名:{{ $post->genre->name}}</p>
            </div>
            @if(Auth::id() === $post->user_id)
              <div style="width: 300px;">
                <form method="POST" action="{{ route('user.posts.delete', ['id' => $post->id]) }}">
                  @csrf
                  <button type="submit">削除</button>
                </form>
              </div>
            @endif
          </div>
        </li>
      @endforeach
    </ul>
  @endif
@endsection
