@extends('layouts.user.app')

@section('content')
  <ul class="card-deck" style="list-style: none;">
    @foreach($posts as $post)
      <li style="margin-bottom: 30px;">
        <div class="card">
          <div class="card-header">
            {{ $post->title }}
          </div>
          <div class="card-body">
            <img src="../../uploads/{{ $post->post_image }}" width="100px" height="100px">
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection
