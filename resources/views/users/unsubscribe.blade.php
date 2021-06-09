<form method="POST" action="http://127.0.0.1:8000/users/{{ $user->id }}/withdraw">
  @csrf
  <button type="submit">削除</button>
</form>