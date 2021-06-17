@extends('layouts.admin.app')

@section('content')
  <ul>
    @foreach($citynames as $cityname)
      <li>
        {{ $cityname->name}}
        <div>
          <form method="post" action="{{ route('admin.citynames.delete', ['id' => $cityname->id]) }}">
            @csrf
            <button type="submit">削除</button>
          </form>
        </div>
      </li>
    @endforeach
  </ul>

  <form method="post" action="{{ route('admin.citynames.create') }}">
    @csrf
    <div>
      <label for="name">都市名</label><br>
      <input name="name" type="text">
    </div>
    <button type="submit">送信</button>
  </form>
  @endsection