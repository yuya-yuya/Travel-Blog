@extends('layouts.user.app')

@section('content')
  <ul>
    @foreach($genres as $genre)
      <li style="list-style: none;">
      <div class="card">
        <div class="card-header"><a href="{{ route('user.posts.genreshow', ['id' => $genre->id]) }}">{{ $genre->name }}</a></div>
        <div class="card-body">コンテンツ</div>
        <div class="card-footer"></div>
      </div>
    @endforeach
  </ul>
@endsection


