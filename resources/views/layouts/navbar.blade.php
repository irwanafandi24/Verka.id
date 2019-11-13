<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie=edge">
    <META NAME="robots" CONTENT="all">
      <META NAME="description" CONTENT="Temukan vendor dengan mudah hanya dengan sekali klik, vendor, wisuda, pernikahan, pakaian, business, startup, fotografer, mua, makeup artist">
    <title>Verka.id</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Verka') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
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
    
</head>
<body>
    <div id="app">
      <navx class="scroll-hide">
        <div class="logo">
          <a href="\"><img src="img/logo.png" alt=""/></a>
        </div>
        <ul class="nav-links" id="header-menu">
          <li><a href="#home" id="menu1" class="link-menu activex">Home</a></li>
          <li><a href="#about" id="menu2" class="link-menu">About</a></li>
          <li><a href="#service" id="menu3" class="link-menu">Service</a></li>
          <li><a href="#whyus" id="menu4" class="link-menu">Why Us</a></li>
          <li><a href="{{ route('PhotographerIndex') }}" class="btnNav-order">Order</a></li>
        </ul>
        <div class="navMenu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </navx>

        <main class="">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript">
      //lol

      // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
    </script>

    <!-- change  active navbar when clicked -->
    <script type="text/javascript">
      var header = document.getElementById("header-menu");
      var btns = header.getElementsByClassName("link-menu");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activex");
        current[0].className = current[0].className.replace(" activex", "");
        this.className += " activex";
        });
      }
    </script>

    <!-- Wow JS access -->
    <script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>
