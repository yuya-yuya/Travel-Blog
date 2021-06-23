@extends('layouts.admin.app')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <p style="text-align:center; font-size: 25px;">
                            <a href="{{ route('admin.genres.index') }}">ジャンル投稿</a>
                        </p>
                    </div>
                    <div class="card-body" style="height: 220px;">
                        <img src="../../../img/jenre.jpg" width="175px" height="175px" style="display: block; margin: auto;">
                    </div>
                    <img>
                </div>
            </div>

            <div class="col-md-3 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <p style="text-align:center; font-size: 25px;">
                            <a href="{{ route('admin.citynames.index') }}">都市名投稿</a>
                        </p>
                    </div>
                    <div class="card-body" style="height: 220px;">
                        <img src="../../../img/city.jpg" width="175px" height="175px" style="display: block; margin: auto;">
                    </div>
                </div>
            </div>

            <div class="col-md-3 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <p style="text-align:center; font-size: 25px;">
                        <a href="{{ route('admin.users.index') }}">ユーザ一覧</a>
                        </p>
                    </div>
                    <div class="card-body" style="height: 220px;">
                        <img src="../../../img/user.jpg" width="175px" height="175px" style="display: block; margin: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection