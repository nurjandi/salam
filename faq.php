<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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
      padding: 12px;
      text-align: center;
    }

    .card{
      border-radius:0;
      padding:60px 10px;
      margin:30px 0px;
      box-shadow: 0px 10px 5px 1px #d6d6d6;
    }
    .gallery
    {
      
    }
    .gallery img
    {
        width: 240px;
        height: 180px;
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

    .batas2{
      padding-top: 48px;
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
  <div class="row" style="height: auto;">
    <div class="col-md-3 col-xs-12" style="padding-left: 36px;">
      <ul class="list-group green position-fixed">
        <li class="list-group-item list-group-item-action"><a href="#satu">1. Apa Itu Salam</a></li>
        <li class="list-group-item list-group-item-action"><a href="#dua">2. Cara Menggunakan Salam</a></li>
        <li class="list-group-item list-group-item-action"><a href="#tiga">3. Fitur Salam</a></li>
      </ul>
    </div>
    <div class="col-md-9 col-xs-12">
      <div class="batas border-bottom">
        <h3 class="green">FAQ</h3>
      </div>
      <div class="batas">
        <h4 class="green">Q: Apa Itu Salam?</h4>
        <h4 class="green">A:</h4>
        <p id="satu">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
       <div class="batas">
        <h4 class="green">Q: Cara Menggunakan Salam?</h4>
        <h4 class="green">A:</h4>
        <p id="dua">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
       <div class="batas">
        <h4 class="green">Q: Apa Saja Fitur dari Salam?</h4>
        <h4 class="green">A:</h4>
        <p  id="tiga">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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