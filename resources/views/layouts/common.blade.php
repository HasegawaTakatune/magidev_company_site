<!DOCTYPE html>
<html lang="ja">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
        <link rel="stylesheet" href="css/slick.css" type="text/css">

        <title>魔法デビ</title>
        <style type="text/css">
            * {
              margin: 0;
              padding: 0;
            }
            .slider {
              width: 50%;
              margin: 0 auto;
            }
            .slick-slide img {
              width: 100%;
            }
            .slick-slide {
              margin: 0;
            }
            .slick-slide:not(.slick-center) {
              opacity: 0.5;
            }
            .header_slider .thumb {
              width: 40%;
              margin: 0 auto;
            }
            .header_slider .thumb li {
              margin-right: 20px;
            }
        </style>
    </head>

    <body>
        @yield('content')
    </body>

</html>

