@extends('layouts.admin.app')

@section('content')
  <ul>
    @foreach($genres as $genre)
      <li>
        {{ $genre->name}}
        <div>
          <form method="post" action="{{ route('admin.genres.delete', ['id' => $genre->id]) }}">
            @csrf
            <button type="submit">削除</button>
          </form>
        </div>
      </li>
    @endforeach
  </ul>

  <form method="post" action="{{ route('admin.genres.create') }}">
    @csrf
    <div>
      <label for="name">ジャンル名</label><br>
      <input name="name" type="text">
    </div>
    <button type="submit">送信</button>
  </form>
@endsection