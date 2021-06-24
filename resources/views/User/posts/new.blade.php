@extends('layouts.user.app')

@section('content')
  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h3>新規投稿</h3>
        <form method="post" action="{{ route('user.posts.create') }}" enctype='multipart/form-data'>
          @csrf
          <div style="margin-top: 30px;">
            <label for="title">タイトル</label><br>
            <input name="title" type="text" size="60"><br>
          </div>
          <div style="margin-top: 30px;">
            <label for="post_image">投稿写真</label><br>
            <input name="post_image" type="file"><br>
          </div>
          <div style="margin-top: 30px;">
            <label for="body">内容</label><br>
            <textarea name="body" rows="15" cols="60" placeholder="ここに内容を入力してください"></textarea>
          </div>
          <div style="margin-top: 30px;">
            <label for="cityname_id">都市名</label><br>
            <select name="cityname_id">
              @foreach($citynames as $cityname)
                <option value="{{ $cityname->id }}">{{ $cityname->name }}<option>
              @endforeach
            </select>
          </div>
          <div style="margin-top: 30px;">
            <label for="genre_id">ジャンル名</label><br>
            <select name="genre_id">
              @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}<option>
              @endforeach
            </select>
          </div>
          <div style="margin-top: 30px;">
            <button type="submit" class="btn btn-primary" style="width: 150px;">投稿</button>
            <a href="{{ route('user.posts.index')}}" class="btn btn-secondary" style="width: 150px;">戻る</a>
          </div>
        </form>
      </div>
    </div>
  <div>
@endsection