@extends('layouts.user.app')

@section('content')
  <ul class="card-deck" style="list-style: none;">
    @foreach($users as $user)
      <li>
        <div class="card" style="width: 400px; margin-bottom: 30px;">
          <div class="card-header" style="height: 60px;">
            <a href="{{ route('user.users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
            @if(Auth::id() === $user->id)
              <a href="{{ route('user.users.edit' ,['id' => $user->id]) }}" class="btn btn-success" style="font-size: 10px;">
                登録情報編集
              </a>
              <a href="{{ route('user.users.unsubscribe' ,['id' => $user->id]) }}" class="btn btn-danger" style="font-size: 10px;">
                登録情報削除
              </a>
            @endif
          </div>
          <div class="card-body" style="height: 60px;">
            プロフィール
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection

