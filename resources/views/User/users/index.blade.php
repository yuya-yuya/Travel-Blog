@extends('layouts.user.app')

@section('content')
  <ul>
    @foreach($users as $user)
      <li style="list-style: none;">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('user.users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
            @if(Auth::id() === $user->id)
              <a href="{{ route('user.users.edit' ,['id' => $user->id]) }}" class="btn btn-success">
                登録情報編集
              </a>
              <a href="{{ route('user.users.unsubscribe' ,['id' => $user->id]) }}" class="btn btn-danger">
                登録情報削除
              </a>
            @endif
          </div>
          <div class="card-body">
            プロフィール
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection

