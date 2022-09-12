<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VENDOR - MAKNA STORE</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php 
		$id_user = $this->session->userdata('vendor_id');
		$user = $this->db->query("select * from vendor where vendor_id='$id_user'")->row();
		?>

		<header class="main-header">			
			<a href="<?php echo base_url(); ?>" class="logo">
				<span class="logo-mini"><b>MW</b></span>
				<span class="logo-lg"><b>MAKNA</b>STORE</span>
			</a>
			
			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="hidden-xs">Halo, <?php echo $user->vendor_nama_bisnis ?> | <b>VENDOR</b></span> <i class="caret"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<?php if($user->vendor_foto == ""){ ?>
										<img src="<?php echo base_url(); ?>/gambar/sistem/user.png" class="img-circle">
									<?php }else{ ?>
										<img src="<?php echo base_url(); ?>/gambar/user/<?php echo $user->vendor_foto; ?>" class="img-circle">
									<?php } ?>
									<p>
										<?php echo $user->vendor_nama ?>
										<small>Hak akses : Vendor</small>
									</p>
								</li>
								
								<li class="user-footer">
									<div class="pull-right">
										<a href="<?php echo base_url().'vendor/keluar' ?>" class="btn btn-default btn-flat">Keluar</a>
									</div>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<?php if($user->vendor_foto == ""){ ?>
							<img src="<?php echo base_url(); ?>/gambar/sistem/user.png" class="img-circle">
						<?php }else{ ?>
							<img src="<?php echo base_url(); ?>/gambar/user/<?php echo $user->vendor_foto; ?>" class="img-circle">
						<?php } ?>
					</div>
					<div class="pull-left info">
						<p><?php echo $user->vendor_nama; ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo base_url().'vendor' ?>">
							<i class="fa fa-dashboard"></i>
							<span>DASHBOARD</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'vendor/produk' ?>">
							<i class="fa fa-folder"></i>
							<span>DATA PRODUK / LAYANAN</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'vendor/album' ?>">
							<i class="fa fa-folder"></i>
							<span>ALBUM</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'vendor/profil' ?>">
							<i class="fa fa-user"></i>
							<span>DATA PROFIL</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url().'vendor/ganti_password' ?>">
							<i class="fa fa-lock"></i>
							<span>GANTI PASSWORD</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'vendor/keluar' ?>">
							<i class="fa fa-share"></i>
							<span>KELUAR</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>