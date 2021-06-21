@extends('layouts.user.app')

@section('content')
  <ul class="card-deck" style="list-style: none;">
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
              <img src="../../../img/no_image_post.jpg" width="100px" height="100px">
            @else
              <img src="../../../uploads/{{ $post->post_image }}" width="100px" height="100px">
            @endif
            <p class="card-text">{{ $post->body }}</p>
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection
