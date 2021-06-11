<ul>
  @foreach($posts as $post)
    <li>
      {{ $post->user->name }}<br>
      <a href="{{ action('PostController@show', $post->id) }}">
        {{ $post ->title}}
      </a><br>
      {{ $post->body }}
      <form method="POST" action="{{ route('posts.delete', ['id' => $post->id]) }}">
        @csrf
        <button type="submit">削除</button>
      </form>
    </li>
  @endforeach
</ul>
