@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <h3>ユーザー詳細画面</h3>
    </div>
  </div>
  <div class="container" style="margin-bottom: 130px;">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card-header" style="margin-top: 30px; ">
          {{ $user->name }}
        </div>
        <div class="card-body" style="height: 150px;">
          <div>
            @if($user->user_image == Null)
              <img src="../../uploads/no_image.jpg" width="100px" height="100px" style="display: block; margin: auto;">
            @else
              <img src="data:image/png;base64, {{ $user->user_image }}" width="100px" height="100px" style="display: block; margin: auto;">
            @endif
            {{ $user -> introduction}}
          </div>
          @if(Auth::id() === $user->id)
            <div class="card-footer">
              <a href="{{ route('user.users.edit' ,['id' => $user->id]) }}" class="btn btn-success" style="font-size: 10px;">
                登録情報編集
              </a>
              <a href="{{ route('user.users.unsubscribe' ,['id' => $user->id]) }}" class="btn btn-danger" style="font-size: 10px;">
                登録情報削除
              </a>
            </div>
          @endif
          <a href="{{ route('user.users.index')}}" style="width: 200px; margin-top: 30px" class="btn btn-secondary">ユーザー一覧に戻る</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <ul class="card-deck" style="list-style: none; margin-top: 30px;">
      @foreach($posts as $post)
      <li>
        <div class="card" style="margin-top: 30px;">
          <div class="card-header" style="width: 300px; height: 75px;">
            <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
              {{ $post->title}}
            </a>
          </div>
          <div class="card-body" style="width: 300px; height: 300px;">
            @if($post->post_image == Null)
              <img src="../../img/no_image_post.jpg" width="100px" height="100px" style="display: block; margin: auto;">
            @else
              <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px" style="display: block; margin: auto;">
            @endif
            <p class="card-text">{{ $post->body }}</p>
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
  </div>
@endsection

