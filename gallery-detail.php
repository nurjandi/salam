<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/lightbox.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    .green{
       color: #89C140;
    }
    .text{
      color: #89C140;
    }
    .btn:focus, .btn:active, button:focus, button:active {
      outline: none !important;
      box-shadow: none !important;
    }
    .gallery
    {
        
    }
    .gallery img
    {
        width: 320px;
        height: 200px;
        filter: grayscale(100%);
        transition: 1s;
    }

    .gallery img:hover
    {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    .batas{
      padding: 24px;
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
            <li class="nav-item active">
              <a class="nav-link disabled" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
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
  <div class="row bg-white" style="height: auto;">
    <div class="offset-md-1 col-md-11 col-xs-12 bg-white border-left border-right" style="height: auto; padding: 48px;">
      <div class="row border-bottom" style="padding: 10px;">
        <div class="col-md-3 col-xs-12">
          <h3 class="green">Gallery Detail</h3>
        </div>
        <div class="offset-md-8 col-md-1 col-xs-12">
          <a class="btn btn-success" href="gallery.php">« Kembali</a>
        </div>
      </div>
      <div class="row" style="padding: 24px;">
          <div class='col-md-4 col-xs-6 batas'>
            <div class="thumbnail gallery">
              <a href="assets/img/wisuda.jpg" data-lightbox="mygallery">
              <img alt="" src="assets/img/wisuda.jpg" />
              </a>
            </div>
          </div>
          <div class='col-md-4 col-xs-6 batas'>
            <div class="thumbnail gallery">
              <a href="assets/img/wisuda.jpg" data-lightbox="mygallery">
              <img alt="" src="assets/img/wisuda.jpg" />
              </a>
            </div>
          </div>
          <div class='col-md-4 col-xs-6 batas'>
            <div class="thumbnail gallery">
              <a href="assets/img/wisuda.jpg" data-lightbox="mygallery">
              <img alt="" src="assets/img/wisuda.jpg" />
              </a>
            </div>
          </div>
          <div class='col-md-4 col-xs-6 batas'>
            <div class="thumbnail gallery">
              <a href="assets/img/wisuda.jpg">
              <img alt="" src="assets/img/wisuda.jpg" />
              </a>
            </div>
          </div>
          <div class='col-md-4 col-xs-6 batas'>
            <div class="thumbnail gallery">
              <a href="assets/img/wisuda.jpg">
              <img alt="" src="assets/img/wisuda.jpg" />
              </a>
            </div>
          </div>
          <div class='col-md-4 col-xs-6 batas'>
            <div class="thumbnail gallery">
              <a href="assets/img/wisuda.jpg">
              <img alt="" src="assets/img/wisuda.jpg" />
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div style="background-color: #253034; height: 200px;">
      <h6 style="color: white; text-align: center; padding-top: 100px;">Copyright (c) 2018 - 2019 - SALAM </h6>
      <h6 style="color: white; text-align: center;">Sistem Administrasi Layanan Akademik - Telp. 081267771344 - Fax. 0411 431111</h6>
  </div>
    <script src="assets/js/vendor/lightbox.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>