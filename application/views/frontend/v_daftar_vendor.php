<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo base_url() ?>">Home</a></li>
			<li class="active">Daftar Customer</li>
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
						<h3 class="title">Pendaftaran Customer Baru</h3>
					</div>

					<?php 
					if(isset($_GET['alert'])){
						if($_GET['alert'] == "duplikat"){
							echo "<div class='alert alert-danger text-center'>Maaf email ini sudah digunakan, silahkan gunakan email yang lain.</div>";
						}
					}
					?>

					<div class="row">
						<div class="col-lg-6 col-lg-offset-3">
							
							<form action="<?php echo base_url('welcome/daftar_vendor_act') ?>" method="post">

								<div class="form-group">
									<label for="">Kategori</label>
									<select class="input" name="kategori">
										<option value="">Pilih</option>
										<?php foreach($kategori as $k){ ?>
											<option value="<?php echo $k->kategori_id ?>"><?php echo $k->kategori_nama ?></option>
										<?php } ?>
									</select>
									<?php echo form_error('kategori'); ?>
								</div>

								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" class="input" name="nama" placeholder="Masukkan nama lengkap ..">
									<?php echo form_error('nama'); ?>
								</div>

								<div class="form-group">
									<label for="">Nama Bisnis</label>
									<input type="text" class="input" name="bisnis" placeholder="Masukkan nama bisnis ..">
									<?php echo form_error('bisnis'); ?>
								</div>

								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="input" name="email" placeholder="Masukkan email ..">
									<?php echo form_error('email'); ?>
								</div>

								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="input" name="password" placeholder="Masukkan password ..">
									<?php echo form_error('password'); ?>
									<small class="text-muted">Password ini digunakan untuk login ke akun anda.</small>
								</div>

								<div class="form-group">
									<label for="">Ulangi Password</label>
									<input type="password" class="input" name="konfirmasi_password" placeholder="Ulangi password ..">
									<?php echo form_error('konfirmasi_password'); ?>
								</div>

								<div class="form-group">
									<input type="submit" class="primary-btn btn-block" value="Daftar">
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
