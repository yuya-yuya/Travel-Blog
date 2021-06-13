<a href="{{ route('posts.new')}}">新規投稿</a>

<ul>
  @foreach($posts as $post)
    <li>
      {{ $post->user->name }}<br>
      <a href="{{ route('users.show', ['id' => $post->id]) }}">
        {{ $post->title}}
      </a><br>
      {{ $post->body }}
      <p>都市名:{{ $post->cityname->name}}</p>
      @if(Auth::id() === $post->user_id)
        <form method="POST" action="{{ route('posts.delete', ['id' => $post->id]) }}">
          @csrf
          <button type="submit">削除</button>
        </form>
      @endif
    </li>
  @endforeach
</ul>
