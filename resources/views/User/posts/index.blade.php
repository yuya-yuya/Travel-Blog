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
    <ul class="card-deck" style="list-style: none; margin-top: 30px;">
      @foreach($posts as $post)
        <li style="margin-bottom: 30px;">
          <div class="card" style="width: 300px;">
            <div class="card-header" style="width: 300px; height: 100px;">
              <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
                <p style="margin-bottom: -10px;">{{ $post->title}}</p>
              </a><br>
            </div>
            <div class="card-body" style="width: 300px; height: 300px;">
              @if($post->post_image == Null)
                <img src="../../img/no_image_post.jpg" width="100px" height="100px" style="display: block; margin: auto;">
              @else
                <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px" style="display: block; margin: auto;">
              @endif
              {{ $post->body }}
            </div>
            <div class="card-footer" style="width: 300px; height: 100px;">
              <p style="font-size: 12px;">都市名:{{ $post->cityname->name}}</p>
              <p style="font-size: 12px; margin-bottom: -10px;">ジャンル名:{{ $post->genre->name}}</p>
            </div>
            @if(Auth::id() === $post->user_id)
              <div class="card-footer" style="width: 300px;">
                <form method="POST" action="{{ route('user.posts.delete', ['id' => $post->id]) }}">
                  @csrf
                  <button type="submit" class="btn btn-danger">削除</button>
                </form>
              </div>
            @endif
          </div>
        </li>
      @endforeach
    </ul>
  @endif
@endsection
