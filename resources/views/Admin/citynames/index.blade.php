@extends('layouts.admin.app')

@section('content')
  <h2 style="margin-bottom: 30px;">都市名投稿と一覧</h2>
  <ul class="card-deck" style="list-style: none;">
    @foreach($citynames as $cityname)
      <li>
        <div class="card">
          <div class="card-header" style="width: 200px; height: 50px; text-align:center;">
            <p style="font-size: 25px;">{{ $cityname->name}}</p>
          </div>
          <div class="card-body" style="width: 200px; height: 150px;">
            <img src="../../uploads/{{ $cityname->cityname_image }}" width="100px" height="100px" style="display: block; margin: auto;">
          </div>
          <div class="card-footer">
            <form method="post" action="{{ route('admin.citynames.delete', ['id' => $cityname->id]) }}">
              @csrf
              <button type="submit" class="btn btn-danger">削除</button>
            </form>
          </div>
        </div>
      </li>
    @endforeach
  </ul>

  <div class="container">
    <div class="row">
      <form method="post" action="{{ route('admin.citynames.create') }}" enctype="multipart/form-data">
        @csrf
        <div style="margin-top: 30px;">
          <label for="name" style="font-size: 25px;">都市名</label><br>
          <input name="name" type="text" style="margin-top: 30px;"><br>
          <input name="cityname_image" type="file" style="margin-top: 30px;">
        </div>
        <div style="margin-top: 30px;">
          <button type="submit" class="btn btn-primary">送信</button>
          <a href="{{ route('admin.home.index') }}" class="btn btn-secondary">管理者トップ</a>
        </div>
      </form>
    </div>
  </div>
  @endsection