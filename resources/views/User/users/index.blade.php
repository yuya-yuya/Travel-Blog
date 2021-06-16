<a href="{{ route('user.posts.index')}}">投稿一覧</a>
<ul>
  @foreach($users as $user)
    <li>
      <a href="{{ route('user.users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
    </li>
  @endforeach
</ul>

