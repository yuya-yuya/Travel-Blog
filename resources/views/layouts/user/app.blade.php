<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/skippr.min.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/8f0be0a856.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skippr.css') }}" rel="stylesheet">

</head>
<body>
<!-- Authentication Links -->
@unless (Auth::guard('user')->check())
    <nav class="navbar bg-dark  navbar-dark fixed-top">
        <p class="navbar-brand">転・点・展</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.home.index') }}">
                        <i class="fas fa-home">ホーム</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.login') }}">
                        <i class="fas fa-sign-in-alt">ログイン</i>
                    </a>
                </li>
                @if (Route::has('user.register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.register') }}">
                            <i class="fas fa-external-link-alt">新規登録</i>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.users.index')}}">
                        <i class="fas fa-user-friends">ユーザー一覧</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.posts.index')}}">
                        <i class="fas fa-book">投稿一覧</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
@else
    <nav class="navbar bg-dark  navbar-dark fixed-top">
        <p class="navbar-brand">転・点・展</p>
        <p class="nav-link" style="color: white;">ようこそ{{ Auth::user()->name }}さん</p>
        @if (Auth::guard('admin')->check())
            <a class="nav-link" href="{{ route('admin.home.index') }}">管理者トップ</a>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.posts.new')}}">
                        <i class="fas fa-external-link-alt">新規登録</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.users.index')}}">
                        <i class="fas fa-user-friends">ユーザー一覧</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.posts.index')}}">
                        <i class="fas fa-book">投稿一覧</i>
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt">ログアウト</i>
                    </a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
@endunless
<br>
<br>
<br>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>