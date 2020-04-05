<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog</title>
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
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo base_url().'/assets/images/header_blog/'.$gambar_header;?>');">  <h2 class="ltext-105 cl2 txt-center">
    Blog
  </h2>
</section>

<!-- breadcrumb -->
  <div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
      <a href="<?php echo site_url('home');?>" class="stext-109 cl8 hov-cl1 trans-04">
        Home
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="<?php echo site_url('blog');?>" class="stext-109 cl8 hov-cl1 trans-04">
        Blog
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4">
        Cari
      </span>
    </div>
  </div>

<!-- Content page -->
  <section class="bg0 p-t-62 p-b-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-9 p-b-80">
          <div class="p-r-45 p-r-0-lg">
            <!-- item blog -->
            <?php foreach ($data->result() as $row):?>
            <div class="p-b-63">
              <a href="<?php echo site_url('blog/'.$row->judul_post);?>" class="hov-img0 how-pos5-parent">
                <img src="<?php echo base_url().'assets/images/blog/'.$row->gambar_post;?>" alt="IMG-BLOG">

                <div class="flex-col-c-m size-123 bg9 how-pos5">
                  <span class="ltext-107 cl2 txt-center">
                    <?php 
                      $date_time = $row->tanggal_post;
                      $new_date = strtotime($date_time);
                      echo date("d", $new_date);
                    ?>
                  </span>

                  <span class="stext-109 cl3 txt-center">
                    <?php 
                      $date_time = $row->tanggal_post;
                      $bulan = strtotime($date_time);
                      $tahun = strtotime($date_time);
                      echo date("M ", $bulan);
                      echo date("Y", $tahun);
                    ?>
                  </span>
                </div>
              </a>

              <div class="p-t-32">
                <h4 class="p-b-15">
                  <a href="<?php echo site_url('Blog/detail/'.$row->id_post);?>" class="ltext-108 cl2 hov-cl1 trans-04">
                    <?php echo $row->judul_post;?>
                  </a>
                </h4>

                <p class="stext-117 cl6">
                  <?php 
                    $konten = $row->konten_post;
                    echo word_limiter($konten,50);
                  ?>
                </p>

                <div class="flex-w flex-sb-m p-t-18">
                  <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                    <span>
                      <span class="cl4">By</span> Admin  
                      <span class="cl12 m-l-4 m-r-6">|</span>
                    </span>

                    <span>
                      Kategori : <?php echo $row->nama_kategori;?>
                      <span class="cl12 m-l-4 m-r-6">|</span>
                    </span>
                    <span>
                      Tag : <?php echo $row->nama_tag;?>
                      <span class="cl12 m-l-4 m-r-6">|</span>
                    </span>
                  </span>

                  <a href="<?php echo site_url('Blog/detail/'.$row->id_post);?>" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                    Detail Postingan

                    <i class="fa fa-long-arrow-right m-l-9"></i>
                  </a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 p-b-80">
          <div class="side-menu">
            <div class="bor17 of-hidden pos-relative">
              <form action="<?php echo base_url().'Blog/search'?>" method="post">
                <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" placeholder="Search" name="keyword">

                <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04" type="submit">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </form>
            </div>

            <div class="p-t-55">
              <h4 class="mtext-112 cl2 p-b-33">
                Kategori
              </h4>
              <?php foreach ($kategori->result() as $row):?> 
              <ul>
                <li class="bor18">
                  <a href="<?=site_url('/blog/kategori/'.$row->id_kategori);?>" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                    <?php echo $row->nama_kategori; ?>
                  </a>
                </li>
              </ul>
            <?php endforeach; ?>
            </div>

            <div class="p-t-50">
              <h4 class="mtext-112 cl2 p-b-27">
                Tags
              </h4>
              <div class="flex-w m-r--5">
                <?php foreach ($tag->result() as $row):?> 
                <a href="<?=site_url('/blog/tag/'.$row->id_tag);?>" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                <?php echo $row->nama_tag; ?>
                <?php endforeach;?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  