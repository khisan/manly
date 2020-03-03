<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Manly</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url('assets/back/img/icon.ico')?>" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?php echo base_url('assets/back/js/plugin/webfont/webfont.min.js')?>"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
					"simple-line-icons"
				],
				urls: ['<?php echo base_url("assets/back/css/fonts.min.css")?>']
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url('assets/back/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/back/css/atlantis.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/back/summernote/dist/summernote-bs4.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/back/dropify/css/dropify.min.css')?>">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets/back/css/demo.css')?>">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="index.html" class="logo">
					<img src="<?php echo base_url('assets/back/img/logo1.png')?>" alt="navbar brand" class="navbar-brand" width="130px">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" href="<?php echo base_url().'Login/logout'?>" aria-expanded="false">
								<i class="fas fa-sign-out-alt"></i>
							</a>
						</li>
					</ul>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<?php
                $id_user=$this->session->userdata('id_user');
                $query=$this->db->get_where('tb_user', array('id_user' => $id_user));
                if($query->num_rows() > 0):
                $row = $query->row_array();
            	?>
							<img src="<?php echo base_url().'assets/images/user/'.$row['foto'];?>" alt="..."
								class="avatar-img rounded-circle">
								<?php else:?>
							<img src="<?php echo base_url().'assets/images/user/user_blank.png';?>" alt="..."
								class="avatar-img rounded-circle">
							<?php endif;?>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $this->session->userdata("nama"); ?>
									<span class="user-level"><?php echo $this->session->userdata("username"); ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?php echo site_url('Backend/user_setting');?>">
											<span class="link-collapse">Edit Profil</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/ubah_pass');?>">
											<span class="link-collapse">Ubah Password</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?php echo site_url('Backend/dashboard');?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							<div class="collapse" id="dashboard"></div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#post">
								<i class="fas fa-layer-group"></i>
								<p>Post</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="post">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('Backend/post/add_new');?>">
											<span class="sub-item">Tambah Postingan</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/post');?>">
											<span class="sub-item">List Postingan</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/kategori');?>">
											<span class="sub-item">Kategori</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/tag');?>">
											<span class="sub-item">Tag</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#produk">
								<i class="fas fa-archive"></i>
								<p>Produk</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="produk">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('Backend/produk/add_new');?>">
											<span class="sub-item">Tambah Produk</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/produk');?>">
											<span class="sub-item">List Produk</span>
										</a>
									</li>
								</ul>
              </div>
            </li>
            <li class="nav-item">
							<a data-toggle="collapse" href="#pengaturan">
								<i class="fas fa-cog"></i>
								<p>Pengaturan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="pengaturan">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('Backend/home_setting');?>">
											<span class="sub-item">Home</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/about_setting');?>">
											<span class="sub-item">About</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Backend/kontak_setting');?>">
											<span class="sub-item">Contact</span>
										</a>
									</li>
								</ul>
              </div>
            </li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->