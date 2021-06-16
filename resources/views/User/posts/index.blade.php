<a href="{{ route('user.posts.new')}}">新規投稿</a>
<a href="{{ route('user.users.index')}}">ユーザー一覧</a>
<a href="{{ route('user.home.index')}}">トップページ</a>

<ul>
  @foreach($posts as $post)
    <li>
      {{ $post->user->name }}<br>
      <a href="{{ route('user.posts.show', ['id' => $post->id]) }}">
        {{ $post->title}}
      </a><br>
      {{ $post->body }}
      <p>都市名:{{ $post->cityname->name}}</p>
      <p>ジャンル名:{{ $post->genre->name}}</p>
      @if(Auth::id() === $post->user_id)
        <form method="POST" action="{{ route('user.posts.delete', ['id' => $post->id]) }}">
          @csrf
          <button type="submit">削除</button>
        </form>
      @endif
    </li>
  @endforeach
</ul>
