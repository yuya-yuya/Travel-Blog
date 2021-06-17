@extends('layouts.user.app')

@section('content')
  <div class="card">
    <div class="card-header">{{ $user->name }}</div>
    <div class="card-text"></div>
    <div class="card-body">
      プロフィール
    </div>
  </div>
  <a href="{{ route('user.users.index')}}">戻る</a>
@endsection
