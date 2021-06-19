@extends('layouts.user.app')

@section('content')
  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach

  <form method="POST" action="{{ route('user.users.update', ['id' => $user->id]) }}" enctype='multipart/form-data'> 
    @csrf
    <div>
      <label for="name">名前</label><br>
      <input name="name" type="text" value="{{ $user->name }}" /><br>
    </div>
    <div>
      <label for="email">メールアドレス</label><br>
      <input name="email" type="email" value="{{ $user->email }}"><br>
    </div>
    <div>
      <label for="user_image">ユーザー写真</label><br>
      <input name="user_image" type="file"><br>
    </div>
    <button type="submit" class="btn btn-primary">変更</button>
  </form>
  <a href="{{ route('user.users.index') }}" class="btn btn-secondary">戻る</a>
@endsection



