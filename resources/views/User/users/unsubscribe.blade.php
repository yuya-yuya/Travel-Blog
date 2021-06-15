<form method="POST" action="{{ route('user.users.withdraw', ['id' => $user->id]) }}">
  @csrf
  <button type="submit">削除</button>
</form>