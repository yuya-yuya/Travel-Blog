<a href="{{ route('user.posts.index') }}">
  戻る
</a><br>

{{ $post -> title }}

@foreach($post->replies as $reply)
  <div class="card">
    <div class="card-header">{{ $reply->user->name }}</div>
    <div class="card-body">
      <p class="card-text">{{ $reply->body }}</p>
    </div>
  </div>
@endforeach

@auth
  <div class="card">
    <div class="card-header">{{ Auth::user()->name }}</div>
      <div class="card-body">
        <form method="POST" action="{{ route('user.posts.reply', ['id' => $post->id]) }}">
          @csrf
          <div class="form-group">
            <textarea name="body" class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">返信する</button>
        </form>
      </div>
    </div>
  </div>
@endauth