@extends('layouts.user.app')

@section('content')
  <ul>
    @foreach($users as $user)
      <li style="list-style: none;">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('user.users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
          </div>
          <div class="card-text"></div>
          <div class="card-body">
            プロフィール
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection

