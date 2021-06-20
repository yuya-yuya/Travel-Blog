@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <h3>ユーザー一覧</h3> 
    </div>
  </div>
  <ul class="card-deck" style="list-style: none; margin-top: 30px;">
    @foreach($users as $user)
      <li>
        <div class="card" style="width: 400px; margin-bottom: 30px;">
          <div class="card-header" style="height: 60px;">
            <a href="{{ route('user.users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
          </div>
          <div class="card-body" style="height: 150px;">
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
        </div>
      </li>
    @endforeach
  </ul>
@endsection

