<form method="POST" action="{{ route('users.withdraw', ['id' => $user->id]) }}">
  @csrf
  <button type="submit">削除</button>
</form>