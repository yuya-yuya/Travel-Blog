@extends('layouts.user.header')


userのホームです

<ul>
  @foreach($genres as $genre)
    <li>
      <a href="{{ route('user.posts.genreshow', ['id' => $genre->id]) }}">{{ $genre->name }}</a>
    </li>
  @endforeach
</ul>


