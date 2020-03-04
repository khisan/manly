<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	html *{
		@font-face {
      font-family: 'Gotham-Medium'; !important
      src: url('<?php echo base_url().'/assets/font/Gotham-Medium.otf'?>');
    }
	}
</style>
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
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar"></div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="<?php echo base_url('home')?>" class="logo">
						<img src="<?php echo base_url().'/assets/images/theme/'.$logo_header;?>" alt="IMG-LOGO">
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
