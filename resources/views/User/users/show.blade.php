@extends('layouts.user.app')

@section('content')
  <h3>ユーザー詳細画面</h3>
  <div class="card-header" style="margin-top: 30px;">
    {{ $user->name }}
  </div>
  <div class="card-body" style="height: 150px;">
    <div>
      @if($user->user_image == Null)
        <img src="../../uploads/no_image.jpg" width="100px" height="100px">
      @else
        <img src="../../uploads/{{ $user->user_image }}" width="100px" height="100px">
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
@endsection
