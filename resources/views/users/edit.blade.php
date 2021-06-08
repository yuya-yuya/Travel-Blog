@if(Session::has('message'))
  <div>{{ Session::get('message') }}</div>
@endif

<form method="POST" action="http://127.0.0.1:8000/users/update/{{ $user->id }}"> 
  @csrf
  <input name="name" type="text" value="{{ $user->name }}" /><br>
  <button type="submit">変更</button>
</form>


