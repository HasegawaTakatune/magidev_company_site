@php
    $nowPage = 'PHILOSOPHY';
@endphp
@extends('layouts.common')

@section('content')
    @extends('layouts.header')

    <div class="header_slider">
        <ul class="slider">
            @foreach ($data as $img)
                <li><a href="{{$img->url}}"><img src="{{$img->path}}" alt=""></a></li>
            @endforeach
        </ul>
        <ul class="thumb">
            @foreach ($data as $img)
            <li><a href="#"><img src="{{$img->path}}" alt=""></a></li>
            @endforeach
        </ul>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/slick.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        $('.slider').slick({
          infinite: true, // 無限スクロール
          centerMode: true,
          autoplay:true,
          dots:false,
          arrows: false,
          draggable: false,
        });
        $('.thumb').slick({
          infinite: true,
          autoplay:true,
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.slider', //スライダー本体のクラス名
          focusOnSelect: true,
          arrows: false,
        });
      </script>
  </div>

  <div>
    <div class="row app-contents-flame-header">
        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
        Sign in
    </div>
    <div>
        <ul class="app-contents-item">
            <li>
                <div class="card" style="width: 18rem;">
                    <img src="images/ComingSoonRed.png" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </li>
        </ul>
    </div>
  </div>


@endsection
