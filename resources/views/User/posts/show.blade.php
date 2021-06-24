@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <h4>投稿詳細</h4>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header">
            {{ $post -> title }}
          </div>
          <div class="card-body">
            @if($post->post_image == Null)
              <img src="../../img/no_image_post.jpg" width="100px" height="100px" style="display: block; margin: auto;">
            @else
              <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px" style="display: block; margin: auto;">
            @endif
            <p class="card-text">{{ $post->body }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h4>返信一覧</h4>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-1">
        @foreach($post->replies as $reply)
          <div class="card" style="margin-top: 30px;">
            <div class="card-header">{{ $reply->user->name }}</div>
            <div class="card-body">
              <p class="card-text">{{ $reply->body }}</p>
            </div>
          </div>
        @endforeach

        @auth
          <div class="card" style="margin-top: 30px;">
            <div class="card-header">
              {{ Auth::user()->name }}
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('user.posts.reply', ['id' => $post->id]) }}">
                @csrf
                <div class="form-group">
                  <textarea name="body" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">返信する</button>
              </form>
            </div>
          </div>
        @endauth
        <a href="{{ route('user.posts.genreshow', ['id' => $post->genre_id]) }}" class="btn btn-secondary" style="margin-top: 30px;">
          {{ $post->genre->name }} 一覧へ戻る
        </a>
      </div>
    </div>
  </div>
@endsection

