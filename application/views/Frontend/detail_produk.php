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
          <a href="<?php echo base_url('shop')?>">Blog</a>
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
  <!-- Product Detail -->
  <!-- breadcrumb -->
  <div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
      <a href="<?php echo site_url('home');?>" class="stext-109 cl8 hov-cl1 trans-04">
        Home
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="<?php echo site_url('shop');?>" class="stext-109 cl8 hov-cl1 trans-04">
        Shop
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>
      <?php foreach ($data->result() as $row):?>
        <span class="stext-109 cl4">
          <?php echo $row->nama_produk;?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>

<?php foreach ($data->result() as $produk):?>
  <section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-7 p-b-30">
          <div class="p-l-25 p-r-30 p-lr-0-lg">
            <div class="wrap-slick3 flex-sb flex-w">
              <div class="slick3 gallery-lb">
                <div class="item-slick3">
                  <div class="wrap-pic-w pos-relative">
                    <img src="<?php echo base_url().'assets/images/produk/'.$produk->foto_produk;?>" alt="IMG-PRODUCT">

                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo base_url().'assets/images/produk/'.$produk->foto_produk;?>">
                      <i class="fa fa-expand"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-5 p-b-30">
          <div class="p-r-50 p-t-5 p-lr-0-lg">
            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
              <?php echo $produk->nama_produk ?>
            </h4>

            <span class="mtext-106 cl2">
              <?php $angka = $row->harga_produk; 
                echo 'Rp. '. number_format($angka, 0, '', '.');
              ?>
            </span>

            <!--  -->
            <div class="p-t-20">
              <div class="flex-w p-b-10">
                <div class="respon6" style="margin-right: 10px">
                 <span class="mtext-106 cl2"> 
                    Stock :
                 </span>
                </div>

                <div class="size-204 respon6-next">
                  <span class="mtext-106 cl1"> 
                    <?php echo $produk->stok_produk  ?>
                 </span>
                </div>
              </div>
            </div>

            <div class="flex-w p-b-10">
              <div class="respon6" style="margin-top:30px">
               <span class="mtext-106 cl2"> Our Marketplace : <br>
                  <a href="https://shopee.co.id/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/shopee.ico'?>" alt="Shopee" title="Shopee"></img>
                  </a>
                  <a href="https://www.lazada.co.id/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/lazada.ico'?>" alt="Lazada" title="Lazada"></img>
                  </a>
                  <a href="https://www.zalora.co.id/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/zalora.ico'?>" alt="Zalora" title="Zalora"></img>
                  </a>
                  <a href="https://www.tokopedia.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/tokopedia.ico'?>" alt="Tokopedia" title="Tokopedia"></img>
                  </a>
                  <a href="https://www.blibli.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/blibli.ico'?>" alt="BliBli" title="BliBli"></img>
                  </a>
                  <a href="https://zilingoshopping.id/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16" style="margin-left: 40px;">
                    <img src="<?php echo base_url().'/assets/images/icon/zilingo.ico'?>" alt="Zilingo" title="Zilingo"></img>
                  </a>
                  <a href="https://thefthing.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/thefthing.ico'?>" alt="The F Thing" title="The F Thing"></img>
                  </a>
                  <a href="https://www.blanja.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/blanja.ico'?>" alt="Blanja" title="Blanja"></img>
                  </a>
                  <a href="https://www.bukalapak.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <img src="<?php echo base_url().'/assets/images/icon/bukalapak.ico'?>" alt="BukaLapak" title="BukaLapak"></img>
                  </a>
               </span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="bor10 m-t-50 p-t-43 p-b-40">
        <!-- Tab01 -->
        <div class="tab01">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item p-b-10">
              <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Product Description</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content p-t-43">
            <!-- - -->
            <div class="tab-pane fade show active" id="description" role="tabpanel">
              <div class="how-pos2 p-lr-15-md">
                <p class="stext-102 cl6">
                  <?php echo $produk->deskripsi_produk ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>
</body>
