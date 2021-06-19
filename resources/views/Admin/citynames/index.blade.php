@extends('layouts.admin.app')

@section('content')
  <ul>
    @foreach($citynames as $cityname)
      <li>
        {{ $cityname->name}}<br>
        <img src="../../uploads/{{ $cityname->cityname_image }}" width="100px" height="100px">
        <div>
          <form method="post" action="{{ route('admin.citynames.delete', ['id' => $cityname->id]) }}">
            @csrf
            <button type="submit">削除</button>
          </form>
        </div>
      </li>
    @endforeach
  </ul>

  <form method="post" action="{{ route('admin.citynames.create') }}" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="name">都市名</label><br>
      <input name="name" type="text"><br>
      <input name="cityname_image" type="file">
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
  </form>
  <a href="{{ route('admin.home.index') }}" class="btn btn-secondary">戻る</a>
  @endsection