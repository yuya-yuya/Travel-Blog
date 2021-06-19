@extends('layouts.admin.app')

@section('content')
  <ul>
    @foreach($genres as $genre)
      <li>
        {{ $genre->name}}<br>
        <img src="../../uploads/{{ $genre->image_path }}" width="100px" height="100px">
        <div>
          <form method="post" action="{{ route('admin.genres.delete', ['id' => $genre->id]) }}">
            @csrf
            <button type="submit">削除</button>
          </form>
        </div>
      </li>
    @endforeach
  </ul>

  <form method="post" action="{{ route('admin.genres.create') }}" enctype='multipart/form-data'>
    @csrf
    <div>
      <label for="name">ジャンル名</label><br>
      <input name="name" type="text"><br>
      <input name="genre_image" type="file">
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
  </form>
  <a href="{{ route('admin.home.index') }}" class="btn btn-secondary">戻る</a>
@endsection