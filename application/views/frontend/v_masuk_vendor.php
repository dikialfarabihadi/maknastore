<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo base_url() ?>">Home</a></li>
			<li class="active">Login Customer</li>
		</ul>
	</div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			
			<div class="col-md-12">
				<div class="order-summary clearfix">
					<div class="section-title">
						<h3 class="title">Login Vendor</h3>
					</div>
					
					<?php 
					if(isset($_GET['alert'])){
						if($_GET['alert'] == "terdaftar"){
							echo "<div class='alert alert-success text-center'>Selamat akun anda telah disimpan, silahkan login.</div>";
						}elseif($_GET['alert'] == "gagal"){
							echo "<div class='alert alert-danger text-center'>Email dan Password tidak sesuai, coba lagi.</div>";
						}elseif($_GET['alert'] == "login-dulu"){
							echo "<div class='alert alert-warning text-center'>Silahkan login terlebih dulu untuk membuat pesanan.</div>";
						}
					}
					?>
					

					<div class="row">
						<div class="col-lg-6 col-lg-offset-3">
							
							<form action="<?php echo base_url('welcome/masuk_vendor_act') ?>" method="post">
								
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="input" name="email" placeholder="Masukkan email ..">									
									<?php echo form_error('email'); ?>
								</div>

								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="input" name="password" placeholder="Masukkan password ..">
									<?php echo form_error('password'); ?>
								</div>

								<div class="form-group">
									<input type="submit" class="primary-btn btn-block" value="Login">
									<a href="<?php echo base_url('welcome/daftar_vendor') ?>" class="main-btn btn-block text-center">Daftar Vendor</a>
								</div>
							</form>

						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->