@extends('layouts.user.app')

@section('content')
  <ul class="card-deck" style="list-style: none;">
    @foreach($genres as $genre)
      <li style="list-style: none;">
        <div class="card">
          <div class="card-header"><a href="{{ route('user.posts.genreshow', ['id' => $genre->id]) }}">{{ $genre->name }}</a></div>
          <div class="card-body"> <img src="../../uploads/{{ $genre->image_path }}" width="100px" height="100px"></div>
        </div>
      </li>
    @endforeach
  </ul>

  <div class="container">
    <div class="theTarget">
      <div style="background-image: url(img/test1.jpg)"></div>
      <div style="background-image: url(img/test2.jpg)"></div>
      <div style="background-image: url(img/test3.jpg)"></div>
      <div style="background-image: url(img/test4.jpg)"></div>
      <div style="background-image: url(img/test5.jpg)"></div>
    </div>
    </div>
@endsection


