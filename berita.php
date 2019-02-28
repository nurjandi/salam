<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    /* Stackoverflow preview fix, please ignore */
    .navbar-nav {
      flex-direction: row;
    }
    
    .nav-link {
      padding-right: .5rem !important;
      padding-left: .5rem !important;
    }
    
    /* Fixes dropdown menus placed on the right side */


    .fixed-top-2 {
        margin-top: 56px;
    }

    body {
        padding-top: 120px;
    }

    .box{
        padding:60px 0px;
    }

    .box-part{
        background:#FFF;
        border-radius:0;
        padding:60px 10px;
        margin:30px 0px;
        box-shadow: 0px 10px 5px 1px #d6d6d6;
    }

    .title{
      color: #57882B;
      padding: 10px;
    }

    .jarak{
      padding: 16px;
    }
    .green{
       color: #89C140;
    }
    .text{
      color: #89C140;
      padding: 12px;
    }

    .card{
      border-radius:0;
      padding:60px 10px;
      margin:30px 0px;
      box-shadow: 0px 10px 5px 1px #d6d6d6;
    }

  </style>

    <title>Hello, world!</title>
  </head>
  <body style="background: url('assets/img/back3.jpg');">
  <div class="container">
    <nav class="navbar navbar-toggleable-sm bg-faded navbar-light fixed-top fixed-top-2 shadow-lg p-3 mb-5 bg-white rounded"  style="box-shadow: 0px 12px 6px -6px #d6d6d6;">
        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""><img style="height:10px; width: 10px;" src="assets/img/arrow.png"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav d-flex justify-content-center">
            <li class="nav-item">
              <a class="nav-link disabled" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="download.php">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link disabled" href="berita.php">Berita & Pengumuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="hubungi.php">Hubungi Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="faq.php">FAQ</a>
            </li>
          </ul>
        </div>
    </nav>
    <nav class="navbar navbar-toggleable-sm bg-inverse navbar-light fixed-top bg-white rounded">
        <a class="navbar-brand mx-auto" href="#"><img style="height: 50px; width: 80px;"src="assets/img/logo.png"></a>
        <div class="navbar-collapse collapse" id="navbar2">
            <ul class="navbar-nav">
                ..
            </ul>
        </div>
    </nav>
  </div>
  <div class="row" style="height: auto;">
    <div class="offset-md-1 col-md-8 col-xs-12 jarak bg-white border">
      <div class="col-md-12 col-xs-12 jarak border-bottom" >
         <h3 class="green">BERITA DAN PENGUMUMAN</h3>
      </div>
     
      <div id="carouselExampleIndicators" class="carousel slide jarak" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="berita-detail.php"><img class="d-block w-100" src="assets/img/uin.jpg" alt="First slide"></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Aparat Kepolisian Siap Amankan Wisuda UIN Bandung</h5>
              <p>15 Februari 2019</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="berita-detail.php"><img class="d-block w-100" src="assets/img/uin.jpg" alt="Second slide"></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Pembangunan Rektorat UIN Bandung Sudah Selesai</h5>
              <p>12 Februari 2019</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="berita-detail.php"><img class="d-block w-100" src="assets/img/uin.jpg" alt="Third slide"></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Mari Berkunjung Ke UIN Bandung</h5>
              <p>13 Februari 2019</p>
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
      <div class="">
        <h3 class="title">BERITA TERBARU</h3>
        <div class="card-deck">
          <div class="card">
            <img style="height: 200px; width: 275px;"class="card-img-top jarak" src="assets/img/uin.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="berita-detail.php"><h5 class="card-title green">Aparat Kepolisian Siap Amankan Wisuda UIN Bandung</h5></a>
              <p class="card-text"><small class="text-muted">15 Februari 2019</small></p>
            </div>
          </div>
          <div class="card">
            <img style="height: 200px; width: 275px;"class="card-img-top jarak" src="assets/img/uin.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="berita-detail.php"><h5 class="card-title green">Mari Berkunjung Ke UIN Bandung</h5></a>
              <p class="card-text"><small class="text-muted">13 Februari 2019</small></p>
            </div>
          </div>
          <div class="card">
            <img style="height: 200px; width: 275px;"class="card-img-top jarak" src="assets/img/uin.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="berita-detail.php"><h5 class="card-title green">Pembangunan Rektorat UIN Bandung Sudah Selesai</h5></a>
              <p class="card-text"><small class="text-muted">12 Februari 2019</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="offset-md-10 col-md-2 col-xs-12 jarak">
        <a href="berita-waktu.php"><h6 class="green jarak">Lihat Semua Berita »</h6></a>
      </div>
    </div>
    <div class="col-md-3 col-xs-12 border-left bg-white" style="height:480px; box-shadow: 0px 0px 5px 0px #d6d6d6; position:fixed; right:0">
      <div class="col-md-12 col-xs-12 jarak border-bottom" >
         <h5 class="green">Berita Populer</h5>
      </div>
      <div class="row border-bottom">
        <div class="col-md-3 col-xs-6 jarak">
          <img style="height: 60px; width: 75px; padding-left: 5px;"src="assets/img/uin.jpg">
        </div>
        <div class="col-md-9 col-xs-6 jarak">
          <a href="berita-detail.php"><h6 class="green">Aparat Kepolisian Siap Amankan Wisuda UIN Bandung</h6></a>
          <p>15 Februari 2019</p>
        </div>
      </div>
      <div class="row border-bottom">
        <div class="col-md-3 col-xs-6 jarak">
          <img style="height: 60px; width: 75px; padding-left: 5px;"src="assets/img/uin.jpg">
        </div>
        <div class="col-md-9 col-xs-6 jarak">
          <a href="berita-detail.php"><h6 class="green">Aparat Kepolisian Siap Amankan Wisuda UIN Bandung</h6></a>
          <p>15 Februari 2019</p>
        </div>
      </div>
      <div class="row border-bottom">
        <div class="col-md-3 col-xs-6 jarak">
          <img style="height: 60px; width: 75px;padding-left: 5px;"src="assets/img/uin.jpg">
        </div>
        <div class="col-md-9 col-xs-6 jarak">
          <a href="berita-detail.php"><h6 class="green">Aparat Kepolisian Siap Amankan Wisuda UIN Bandung</h6></a>
          <p>15 Februari 2019</p>
        </div>
      </div>
      <div class="offset-md-5 col-md-7 col-xs-12">
        <a href="berita-waktu.php"><p class="green">Lihat Semua Berita »</p></a>
      </div>
    </div>
  </div>
  <div style="background-color: #253034; height: 200px;">
      <h6 style="color: white; text-align: center; padding-top: 100px;">Copyright (c) 2018 - 2019 - SALAM </h6>
      <h6 style="color: white; text-align: center;">Sistem Administrasi Layanan Akademik - Telp. 081267771344 - Fax. 0411 431111</h6>
  </div>

    <script src="assets/js/vendor/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>