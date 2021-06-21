<body style="height: 600px;">
@extends('layouts.user.app')

@section('content')
  <div class="swiper-container" style="width: 100%; height: 700px; margin-top: -40px; position: relative;">
    <!-- Sliderの内包コンテナ -->
    <div class="swiper-wrapper">
      <!-- Slideさせたいコンテンツ -->
      <div class="swiper-slide">
        <img src="../../img/test1.jpg" width="100%" height="700px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test2.jpg" width="100%" height="700px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test3.jpg" width="100%" height="700px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test4.jpg" width="100%" height="700px">
      </div>
      <div class="swiper-slide">
        <img src="../../img/test5.jpg" width="100%" height="700px">
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
  </div>
  
  <p style="position: absolute; top: 150px; left: 200px; z-index: 100; font-size: 40px;">あなたの旅を共有しよう</p>

  <ul class="card-deck" style="list-style: none;">
    @foreach($genres as $genre)
      @for ($i = 1; $i < $genre->count(); $i++)
        $genrecount = 30 * {{ $i }};
      @endfor
      <li style="list-style: none; position: absolute; top: 300px; left: 30 px; z-index: 100;">
        <div class="card">
          <div class="card-header"><a href="{{ route('user.posts.genreshow', ['id' => $genre->id]) }}">{{ $genre->name }}</a></div>
          <div class="card-body"> <img src="../../uploads/{{ $genre->image_path }}" width="100px" height="100px"></div>
        </div>
      </li>
    @endforeach
  </ul>

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


