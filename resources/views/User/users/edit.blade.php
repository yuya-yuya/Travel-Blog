@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h3>ユーザ情報変更画面</h3>
        @if(Session::has('message'))
          <div>
            <p style="font-size: 30px; color: red;">
              {{ Session::get('message') }}
            </p>
          </div>
        @endif
        @foreach($errors->all() as $message)
          <div>
            <p style="font-size: 30px; color: red;">
              {{ $message }}
            </p>
          </div>
        @endforeach
        <form method="POST" action="{{ route('user.users.update', ['id' => $user->id]) }}" enctype='multipart/form-data'> 
          @csrf
          <div style="margin-top: 30px;">
            <label for="name">名前</label><br>
            <input name="name" type="text" value="{{ $user->name }}" /><br>
          </div>
          <div style="margin-top: 30px;">
            <label for="email">メールアドレス</label><br>
            <input name="email" type="email" value="{{ $user->email }}"><br>
          </div>
          <div style="margin-top: 30px;">
            <label for="introduction">紹介文</label><br>
            <textarea name="introduction" rows="15" cols="60" value="{{ $user->introduction }}" placeholder="ここに内容を入力してください"></textarea>
          </div>
          <div style="margin-top: 30px;">
            <label for="user_image">ユーザー写真</label><br>
            <input name="user_image" type="file"><br>
          </div>
          <div style="margin-top: 30px;">
            <button type="submit" style="width: 150px;" class="btn btn-primary">変更</button>
            <a href="{{ route('user.users.index') }}" style="width: 150px;" class="btn btn-secondary">戻る</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  @if (Auth::guard('admin')->check())
    <a class="nav-link" href="{{ route('admin.home.index') }}">管理者トップ</a>
  @endif
@endsection



