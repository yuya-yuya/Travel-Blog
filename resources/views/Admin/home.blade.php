@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.genres.index') }}">ジャンル投稿</a>
        </div>
        <div class="card-body">ジャンル投稿</div>
        <div class="card-footer"></div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.citynames.index') }}">都市名投稿</a>
        </div>
        <div class="card-body">都市名投稿</div>
        <div class="card-footer"></div>
    </div>
@endsection