@php
    $selected = 'PHILOSOPHY';
@endphp
@extends('layouts.common')

@section('content')
    @extends('layouts.header')

    <div class="header_slider">
        <ul class="slider">
            <li><a href="#"><img src="images/ComingSoonRed.png" alt=""></a></li>
            <li><a href="#"><img src="images/ComingSoonBlue.png" alt=""></a></li>
            <li><a href="#"><img src="images/ComingSoonGreen.png" alt=""></a></li>
        </ul>
        <ul class="thumb">
            <li><a href="#"><img src="images/ComingSoonRed.png" alt=""></a></li>
            <li><a href="#"><img src="images/ComingSoonBlue.png" alt=""></a></li>
            <li><a href="#"><img src="images/ComingSoonGreen.png" alt=""></a></li>
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
          prevArrow: false,
          nextArrow: false,
        });
        $('.thumb').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.slider', //スライダー本体のクラス名
          focusOnSelect: true,
        });
      </script>

@endsection
