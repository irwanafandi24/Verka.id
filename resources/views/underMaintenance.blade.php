@extends('layouts.navbar')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie=edge">
    <META NAME="robots" CONTENT="all">
      <META NAME="description" CONTENT="Temukan vendor dengan mudah hanya dengan sekali klik, vendor, wisuda, pernikahan, pakaian, business, startup, fotografer, mua, makeup artist">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- <title>Verka.id</title> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(window).on('scroll', function(){
        if($(window).scrollTop()>40){
          $('navx').removeClass('bgNavBack');
          $('navx').addClass('bgNav');
        }else{
          $('navx').removeClass('bgNav');
          $('navx').addClass('bgNavBack');
        }
      })
    </script>

    <style>
      h1 { font-size: 50px; }
      a { color: #dc8100; text-decoration: none; }
      a:hover { color: #333; text-decoration: none; }
    </style>
@section('content')

<body>
  <section class="underMaintenance">
      <h1>We&rsquo;ll be back soon!</h1>
      <div>
          <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at this Page. If you need to you can always contact us, otherwise we&rsquo;ll be back online shortly!</p>
          <p>&mdash; Verka Indonesia</p>
      </div>
  </section>
</body>

@include('layouts.footer')
@endsection
