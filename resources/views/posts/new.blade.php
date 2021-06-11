@if(Session::has('message'))
  <div>{{ Session::get('message') }}</div>
@endif
@foreach($errors->all() as $message)
  <div>{{ $message }}</div>
@endforeach
<form method="post" action="{{ route('posts.create') }}">
  @csrf
  <div>
    <label for="title">タイトル</label><br>
    <input name="title" type="text" /><br>
  </div>
  <div>
    <label for="body">内容</label><br>
    <input name="body" type="text" /><br>
  </div>
  <button type="submit">投稿</button>
</form>
