@extends('layouts.user.app')

@section('content')
  <div class="container">
    <div class="row">
      <h4>{{ $genre->name}} 一覧</h4>
    </div>
  </div>
  <ul class="card-deck" style="list-style: none; margin-top: 30px;">
    @foreach($posts as $post)
      <li style="margin-bottom: 30px;">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
              {{ $post->title }}
            </a>
          </div>
          <div class="card-body">
            @if($post->post_image == Null)
              <img src="../../../img/no_image_post.jpg" width="100px" height="100px" style="display: block; margin: auto;">
            @else
              <img src="../../../uploads/{{ $post->post_image }}" width="100px" height="100px" style="display: block; margin: auto;">
            @endif
            <p class="card-text">{{ $post->body }}</p>
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection
