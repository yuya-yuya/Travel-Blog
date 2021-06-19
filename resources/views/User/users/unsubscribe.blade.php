@extends('layouts.user.app')

@section('content')
  <p>本当に削除しますか？</p>
  <form method="POST" action="{{ route('user.users.withdraw', ['id' => $user->id]) }}">
    @csrf
    <button type="submit" class="btn btn-danger">削除</button>
  </form>
  <a href="{{ route('user.users.index') }}" class="btn btn-secondary">戻る</a>
@endsection

