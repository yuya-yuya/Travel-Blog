@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <div>
        <p style="font-size: 40px;">本当に削除しますか？</p>
        <form method="POST" action="{{ route('user.users.withdraw', ['id' => $user->id]) }}">
          @csrf
          <div style="margin-top: 30px;">
            <button type="submit" style="width: 150px;" class="btn btn-danger">削除</button>
            <a href="{{ route('user.users.index') }}" style="width: 150px;" class="btn btn-secondary">戻る</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

