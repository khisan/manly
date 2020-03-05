<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shop</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo base_url().'/assets/images/theme/'.$favicon;?>" />
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

  <style>
    .page-link a{
      color: #000;
    }

    .page-link a:hover{
      color: #fff;
    }

    .page-link:hover{
      color: #fff;
      text-decoration: none;
      background-color: gray;
      border-color: #ddd;
    }

    .page-item.active .page-link {
      z-index: 2;
      color: #fff;
      background-color: #000;
      border-color: #fff;
    }
  </style>

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

      <!-- Icon header -->
      <div class="wrap-icon-header flex-w flex-r-m m-r-15">
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
          <i class="zmdi zmdi-search"></i>
        </div>

        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
          <i class="zmdi zmdi-shopping-cart"></i>
        </div>

        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
          <i class="zmdi zmdi-favorite-outline"></i>
        </a>
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
      <ul class="topbar-mobile">
        <li>
          <div class="left-top-bar">
            Gratis ongkir di atas pembelian Rp. 1000.000
          </div>
        </li>
      </ul>

      <ul class="main-menu-m">
        <li>
          <a href="<?php echo base_url('home')?>">Home</a>
          <span class="arrow-main-menu-m">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
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
  </header>
  <!-- Product -->
  <div class="bg0 m-t-23 p-b-140">
    <div class="container">
      <div class="flex-w flex-sb-m p-b-52">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
          <div class="flex-w flex-c-m m-tb-10">
            <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
              <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
              <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
              Search
            </div>
          </div>
        </div>

        <!-- Search product -->
        <div class="dis-none panel-search w-full p-t-10 p-b-15">
          <div class="bor8 dis-flex p-l-15">
            <form action="<?php echo base_url().'Shop/search'?>" method="post">
              <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04" type="submit">
                <i class="zmdi zmdi-search"></i>
              </button>

              <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="keyword" placeholder="Cari">
            </form>
          </div>
        </div>
      </div>

      <div class="row isotope-grid">
        <?php foreach ($data->result() as $row):?>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="<?php echo base_url().'assets/images/produk/'.$row->foto_produk;?>" alt="IMG-PRODUCT">

              <a href="<?php echo site_url('Shop/detail/'.$row->id_produk);?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" >
                Detail
              </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="<?php echo site_url('Shop/detail/'.$row->id_produk);?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  <?php echo $row->nama_produk;?>
                </a>

                <span class="stext-105 cl3">
                  <?php $angka = $row->harga_produk; 
                    echo 'Rp. '. number_format($angka, 0, '', '.');
                  ?>
                </span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach;?>
      </div>

      <div class="row">
        <div class="col">
          <?php echo $pagination; ?>
        </div>
      </div>

    </div>
  </div>
</body>