<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url().'/assets/images/theme/'.$favicon;?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/fonts/iconic/css/material-design-iconic-font.min.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/fonts/linearicons-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/animate/animate.css')?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/slick/slick.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/MagnificPopup/magnific-popup.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/perfect-scrollbar/perfect-scrollbar.css')?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/util.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body class="animsition">
<!-- Header -->
  <header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
      <div class="wrap-menu-desktop how-shadow1">
        <nav class="limiter-menu-desktop container">
          
          <!-- Logo desktop -->   
          <a href="<?php echo base_url('home')?>" class="logo">
            <img src="<?php echo base_url().'/assets/images/theme/'.$logo_header;?>" alt="IMG-LOGO" width="200px">
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">
              <li>
                <a href="<?php echo base_url('home')?>">Home</a>
              </li>

              <li>
                <a href="<?php echo base_url('shop')?>">Shop</a>
              </li>

              <li>
                <a href="<?php echo base_url('blog')?>">Blog</a>
              </li>

              <li>
                <a href="<?php echo base_url('about')?>">About</a>
              </li>

              <li>
                <a href="<?php echo base_url('contact')?>">Contact</a>
              </li>
            </ul>
          </div>  
        </nav>
      </div>  
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
      <!-- Logo moblie -->    
      <div class="logo-mobile">
        <a href="<?php echo base_url('home')?>"><img src="<?php echo base_url().'/assets/images/theme/'.$logo_header;?>" alt="IMG-LOGO"></a>
      </div>

      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
      <ul class="main-menu-m">
        <li>
          <a href="<?php echo base_url('home')?>">Home</a>
        </li>

        <li>
          <a href="<?php echo base_url('shop')?>">Product</a>
        </li>

        <li>
          <a href="<?php echo base_url('blog')?>">Blog</a>
        </li>

        <li>
          <a href="<?php echo base_url('about')?>">About</a>
        </li>

        <li>
          <a href="<?php echo base_url('contact')?>">Contact</a>
        </li>
      </ul>
    </div>
  </header>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo base_url().'/assets/images/about/'.$gambar_header;?>')">
  <h2 class="ltext-105 cl0 txt-center">
    About
  </h2>
</section>

<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
  <div class="container">
    <div class="row p-b-148">
      <div class="col-md-7 col-lg-8">
        <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
          <h3 class="mtext-111 cl2 p-b-16">
            <?php echo $judul_deskripsi_1; ?>
          </h3>

          <p class="stext-113 cl6 p-b-26">
            <?php echo $isi_deskripsi_1; ?>
          </p>
        </div>
      </div>

      <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
        <div class="how-bor1 ">
          <div class="hov-img0">
            <img src="<?php echo base_url().'/assets/images/about/'.$gambar_deskripsi_1;?>" alt="IMG">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
        <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
          <h3 class="mtext-111 cl2 p-b-16">
            <?php echo $judul_deskripsi_2; ?>
          </h3>

          <p class="stext-113 cl6 p-b-26">
            <?php echo $isi_deskripsi_2; ?>
          </p>
        </div>
      </div>

      <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
        <div class="how-bor2">
          <div class="hov-img0">
            <img src="<?php echo base_url().'/assets/images/about/'.$gambar_deskripsi_2;?>" alt="IMG">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>