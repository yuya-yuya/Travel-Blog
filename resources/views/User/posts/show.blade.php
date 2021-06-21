@extends('layouts.user.app')

@section('content')
  <h4>投稿</h4>
  <div class="card">
    <div class="card-header">{{ $post -> title }}</div>
    <div class="card-body">
      @if($post->post_image == Null)
        <img src="../../img/no_image_post.jpg" width="100px" height="100px">
      @else
        <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px">
      @endif
      <p class="card-text">{{ $post->body }}</p>
    </div>
  </div><br>

  <h4>返信一覧</h4>
  @foreach($post->replies as $reply)
    <div class="card">
      <div class="card-header">{{ $reply->user->name }}</div>
      <div class="card-body">
        <p class="card-text">{{ $reply->body }}</p>
      </div>
    </div>
  @endforeach

  @auth
    <div class="card">
      <div class="card-header">{{ Auth::user()->name }}</div>
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
    </div>
  @endauth

  <a href="{{ route('user.posts.index') }}">
    戻る
  </a><br>
@endsection