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
@section('content')
  <body>
    <!-- Carousel Section =========================================================== -->
    <section  id="home">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item bg-carousle-one active">
            <div class="container">
              <div class="row align-items-center item-carousle ">
                <div class="col-md-7 offset-md-5 item-carousle-content wow fadeInUp" data-wow-duration="1s">
                  <div class="row">
                    <div class="col-md-12">
                      <h1>Abadikan Moment Wisuda<h1/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-detail">
                      Abadikan moment sakral wisuda anda dan ukir cerita indah di kampus tercinta. Moment yang tidak akan terulang lagi, siap diabadikan dalam bingkai galeri. Bingung? jangan hawatir, fotograger keren kami siap menemani keseruan wisuda anda.<strong> <i>Jadi tunggu apa lagi ?</i></strong>
                    </div>
                  </div>
                  <button type="button" name="button" class="btn-order" onclick="window.location.href='{{ route('underMaintenance') }}'">ORDER SEKARANG</button>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item bg-carousle-two">
            <div class="container">
              <div class="row align-items-center item-carousle ">
                <div class="col-md-7  item-carousle-content wow fadeInLeft" data-wow-duration="1s">
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Saatnya Tampil Menawan Dihari Special Wisudamu<h2/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-detail" style="margin-bottom:15px">
                      Moment yang begitu dinanti-nanti sebagai pembuktian dari perjuangan diri, akan semakin lengkap jika kita tampil anggun dan cantik dengan makeup kekinian.<br> <strong> <i>Segera hadir Makeup Artist !</i></strong>
                    </div>
                  </div>
                  <button type="button" name="button" class="btn-soon">COOMING SOON</button>
                </div>
              </div>
            </div>
          </div>


          <div class="carousel-item bg-carousle-three">
            <div class="container">
              <div class="row align-items-center item-carousle ">
                <div class="col-md-8 col-10 offset-md-2 offset-1 border-three wow zoomIn" data-wow-delay="0.5s">
                  <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                      <h2>Happy Graduation<h2/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-detail-quot">
                      "Don’t ever confuse the two, your life and your work. The second is only part of the first." <strong><i> - Anna Quindlen</i></strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <!-- About Section ========================================================= -->
    <section class="section-two" id="about">
      <div class="container">
        <div class="row align-items-center section-two-row">

          <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.5s">
            <div class="row justify-content-center">
              <div class="col-md-12 section-two-tagline">
                <strong>Find it Easily!</strong>
              </div>
              <div class="col-md-12 section-two-title">
                Temukan Vendor yang Sesuai Dengan Kebutuhan Anda
              </div>
              <div class="col-md-11 section-tow-content">
                <strong><i>Vendor Kita (Verka)</i></strong> merupakan sebuah platform yang memudahkan customer dalam menemukan vendor sesuai kebutuhannya. Dimanapun dan kapanpun, Verka siap untuk membantu menemukan solusi terbaik serta memberikan pengalaman pemakaian pengguna dengan design yang mengasiykan dan <i>entertaining.</i>
              </div>
              <div class="col-md-12 ">
                <div class="row section-two-btn">
                  <div class="col-md-4 col-6 offset-md-2">
                    <center><button type="submit" class="btn-file" onclick="window.open('https://drive.google.com/open?id=112L0CEt_pONhjpSc2YtvOZWmKNwu3rdQ')">Alur Pemesanan</button></center>
                  </div>
                  <div class="col-md-4 col-6">
                    <center><button type="submit" class="btn-file" onclick="window.open('https://forms.gle/gnLCCSHofysKe1aH7')">Gabung Mitra</button></center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="1s">
            <img src="img/sectionthree.png" alt="">
          </div>

        </div>
      </div>
    </section>

    <section class="section-three" id="service">
      <h3><strong>Layanan Kami</strong></h3>
      <center><div class="bar"/></center>

      <div class="container wow fadeIn" data-wow-delay="0.8s">
        <div class="row">

          <div class="col-md-3 col-sm-6 col-6">
            <div class="card-service">
              <img src="img/foto.jfif" alt="">
              <div class="card-cost">
                Rp 300.000
              </div>
                  <h6>Fotografer</h6>
              <div class="card-font">
                Abadikan moment wisudamu dengan fotografer handal dengan penawaran harga menarik.
              </div>
              <button type="submit" class="btn-detail" onclick="window.location.href='{{ route('underMaintenance') }}'">Detail</button>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-6">
            <div class="card-service">
              <img src="img/wedding-hair-and-makeup-trial.jpg" alt="">
              <div class="card-cost">
                Rp 250.000
              </div>
                  <h6>Makeup Artist</h6>
              <div class="card-font">
                Ayo saatnya tampil anggun dan menawan satu hari di hari spesial wisudamu.
              </div>
              <center><button type="submit" class="btn-detail-soon">Soon</button></center>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-6 col-two">
            <div class="card-service">
              <img src="img/bag.jpg" alt="">
              <div class="card-cost">
                Rp 30.000
              </div>
              <h6>Tote Bag Wisuda</h6>
              <div class="card-font">
                Tak perlu ribet membawa barang pemberian dari orang-orang terdekat. Big totebag solusi tepat.
              </div>
              <center><button type="submit" class="btn-detail-soon">Soon</button></center>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-6 col-two">
            <div class="card-service">
              <img src="img/kadoWisuda.png" alt="">
              <div class="card-cost">
                Soon
              </div>
                  <h6>Gift</h6>
              <div class="card-font">
                Layanan pencarian jasa produksi terpercaya dan harga terjangkau untuk memenuhi kebutuhan anda.
              </div>
              <center><button type="submit" class="btn-detail-soon">Soon</button></center>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-four" id="whyus">
      <h3><strong>Mengapa Percaya Kami?</strong></h3>
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6 col-6 card-believe wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.3s">
            <img src="img/shope.png" alt="" style='width:23% !important'>
            <h6>Pemesanan Mudah</h6>
            <center><div class="section-four-bar"></div><center>
            <div class="card-believe-content d-none d-sm-block">
              Tak perlu  ribet-ribet lagi mencari dan memesan vendor sesuai keinginan anda. Kapanpun dan dimanapun pemesanan dapat dilakukan dengan <i><strong>one step click</strong></i> melalui website kami. Pemesanan berhasil, vendor yang anda butuhkan siap membantu memenuhi kebutuhan anda.
            </div>
            <div class="card-believe-content d-block d-sm-none">
              Tak perlu  ribet-ribet lagi mencari dan memesan vendor sesuai keinginan anda. Kapanpun dan dimanapun pemesanan dapat dilakukan dengan <i><strong>one step click</strong></i> melalui website kami.
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 card-believe wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
            <img src="img/quality.png" alt="">
            <h6>Kualitas Terjamin</h6>
            <center><div class="section-four-bar"></div><center>
            <div class="card-believe-content d-none d-sm-block">
              Kami memberikan kualifikasi tenaga ahli yang terpercaya serta kompeten dibidangnya. Sehingga diharapkan dapat menciptakan mutu <i><strong>service excelent</strong></i> bagi para customer.
            </div>
            <div class="card-believe-content d-block d-sm-none">
              Kami memberikan kualifikasi tenaga ahli yang kompeten dibidangnya, diharapkan dapat menciptakan mutu <i><strong>service excelent</strong></i> bagi para customer.
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 card-believe wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.75s">
            <img src="img/choice.png" alt="">
            <h6>Banyak Pilihan</h6>
            <center><div class="section-four-bar"></div><center>
            <div class="card-believe-content d-none d-sm-block">
              Jumlah vendor yang akan terus kita tambahkan, diharapkan <i><strong>memberi warna</i></strong> tersendiri kepada pengguna dalam memenuhi pilihan kebutuhan yang beragam. Berikan kami masukan untuk menyediakan jasa sesuai dengan yang anda butuhkan.
            </div>
            <div class="card-believe-content d-block d-sm-none">
              Jumlah vendor yang akan terus kita tambahkan, diharapkan <i><strong>memberi warna</i></strong> tersendiri kepada pengguna dalam memenuhi pilihan kebutuhan yang beragam.
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 card-believe wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.45s">
            <img src="img/money.png" alt="" style='width:29% !important'>
            <h6>Harga Bersahabat</h6>
            <center><div class="section-four-bar"></div><center>
            <div class="card-believe-content d-none d-sm-block">
              Tak perlu khawatir lagi soal <i><strong>budget</strong></i>, layanan kami menawarkan harga sesuai kantong mahasiswa. Selain itu kami juga menyediakan beberapa vendor sejenis dimana anda bisa membandingkan harga dari masing-masing vendor. Kalian percaya, kami siap mewujudkannya.
            </div>
            <div class="card-believe-content d-block d-sm-none">
              Tak perlu khawatir lagi soal <i><strong>budget</strong></i>, banyak vendro sejenis yang bisa dipilih dan tentunya menawarkan harga sesuai kantong kita.
            </div>
          </div>

        </div>
      </div>
    </section>


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
@include('layouts.footer')
@endsection