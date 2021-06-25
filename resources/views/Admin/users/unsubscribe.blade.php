@extends('layouts.user.app')

@section('content')
  <div class="container" style="margin-top: 200px;">
    <div class="row">
      <div class="coi-md-6 offset-md-3">
        <p style="font-size: 40px;">本当に削除しますか？</p>
        <form method="POST" action="{{ route('admin.users.withdraw', ['id' => $user->id]) }}">
          @csrf
          <div style="margin-top: 30px;">
            <button type="submit" style="width: 150px;" class="btn btn-danger">削除</button>
            <a href="{{ route('admin.users.index') }}" style="width: 150px;" class="btn btn-secondary">戻る</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  @if (Auth::guard('admin')->check())
    <a class="nav-link" href="{{ route('admin.home.index') }}">管理者トップ</a>
  @endif
@endsection

