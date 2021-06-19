@extends('layouts.user.app')

@section('content')
  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach
  <form method="post" action="{{ route('user.posts.create') }}" enctype='multipart/form-data'>
    @csrf
    <div>
      <label for="title">タイトル</label><br>
      <input name="title" type="text" /><br>
    </div>
    <div>
      <label for="post_image">投稿写真</label><br>
      <input name="post_image" type="file"><br>
    </div>
    <div>
      <label for="body">内容</label><br>
      <input name="body" type="text" /><br>
    </div>
    <div>
      <label for="cityname_id">都市名</label><br>
      <select name="cityname_id">
        @foreach($citynames as $cityname)
          <option value="{{ $cityname->id }}">{{ $cityname->name }}<option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="genre_id">ジャンル名</label><br>
      <select name="genre_id">
        @foreach($genres as $genre)
          <option value="{{ $genre->id }}">{{ $genre->name }}<option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">投稿</button>
  </form>
  <a href="{{ route('user.posts.index')}}" class="btn btn-secondary">戻る</a>
@endsection