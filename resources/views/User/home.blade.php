<body style="height: 600px;">
@extends('layouts.user.app')

@section('content')
  <div class="swiper-container" style="width: 70%; height: 400px; margin-top: -40px; position: relative;">
    <!-- Sliderの内包コンテナ -->
    <div class="swiper-wrapper">
      <!-- Slideさせたいコンテンツ -->
      <div class="swiper-slide">
        <img src="../../img/test1.jpg" width="100%" height="400px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test2.jpg" width="100%" height="400px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test3.jpg" width="100%" height="400px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test4.jpg" width="100%" height="400px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test5.jpg" width="100%" height="400px">
      </div>
    </div>
    <!-- ページネーション（※省略可） -->
    <div class="swiper-pagination"></div>
    <!-- ナビゲーションボタン（※省略可） -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- スクロールバー（※省略可） -->
    <div class="swiper-scrollbar"></div>
   
    <div class="swiper-slide"></div>
    <p style="position: absolute; top: 50px; left: 100px; z-index: 100; font-size: 40px;">あなたの旅を共有しよう</p>
  </div>
  
  

  <div class="container" style="margin-top: 30px;">
    <div class="row">
      <ul class="card-deck" style="list-style: none;">
        @foreach($genres as $genre)
          <li style="list-style: none; top: 300px; left:30px; z-index: 100;">
            <div class="card">
              <div class="card-header"><a href="{{ route('user.posts.genreshow', ['id' => $genre->id]) }}">{{ $genre->name }}</a></div>
              <div class="card-body">
                @if($genre->image_path == Null)
                  <img src="../../../img/no_image_post.jpg" width="100px" height="100px" style="display: block; margin: auto;">
                @else
                  <img src="data:image/png;base64, {{ $genre->image_path }}" width="100px" height="100px">
                @endif
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var mySwiper = new Swiper ('.swiper-container', {
      // ここからオプション
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    })
  </script>
@endsection
</body>


