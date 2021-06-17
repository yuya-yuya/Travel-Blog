@extends('layouts.user.app')

@section('content')
  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach

  <form method="POST" action="{{ route('user.users.update', ['id' => $user->id]) }}"> 
    @csrf
    <input name="name" type="text" value="{{ $user->name }}" /><br>
    <input name="email" type="email" value="{{ $user->email }}"><br>
    <button type="submit">変更</button>
  </form>
@endsection



