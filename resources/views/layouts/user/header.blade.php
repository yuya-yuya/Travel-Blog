@auth
  <a href="{{ route('user.users.index')}}">ユーザー一覧</a>
  <a href="{{ route('user.posts.index')}}">投稿一覧</a>
  <a href="{{ route('user.logout') }}">ログアウト</a>
@endauth

@guest
  <a href="{{ route('user.register')}}">新規登録</a>
  <a href="{{ route('user.login')}}">ログイン</a>
  <a href="{{ route('user.users.index')}}">ユーザー一覧</a>
  <a href="{{ route('user.posts.index')}}">投稿一覧</a>
@endguest
