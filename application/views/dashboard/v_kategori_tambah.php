<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Kategori
			<small>Kategori Artikel</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				<a href="<?php echo base_url().'dashboard/kategori'; ?>" class="btn btn-sm btn-primary">Kembali</a>
				
				<br/>
				<br/>

				<form method="post" action="<?php echo base_url('dashboard/kategori_aksi') ?>">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Kategori</h3>
						</div>
						<div class="box-body">

							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" name="nama" class="form-control" placeholder="Masukkan nama nama .." value="<?php echo set_value('nama'); ?>">
								<?php echo form_error('nama'); ?>
							</div>

							<div class="form-group">
								<label>Icon</label>
								<select class="form-control" name="icon">
									<option value="">Tidak pakai icon</option>
									<option <?php if(set_value('icon') == "fa fa-home"){ echo "selected='selected'"; } ?> value="fa fa-home">fa fa-home</option>
									<option <?php if(set_value('icon') == "fa fa-user"){ echo "selected='selected'"; } ?> value="fa fa-user">fa fa-user</option>
									<option <?php if(set_value('icon') == "fa fa-globe"){ echo "selected='selected'"; } ?> value="fa fa-globe">fa fa-globe</option>
									<option <?php if(set_value('icon') == "fa fa-envelope"){ echo "selected='selected'"; } ?> value="fa fa-envelope">fa fa-envelope</option>
									<option <?php if(set_value('icon') == "fa fa-briefcase"){ echo "selected='selected'"; } ?> value="fa fa-briefcase">fa fa-briefcase</option>
								</select>
								<?php echo form_error('icon'); ?>
							</div>

							<div class="form-group">
								<label>Parent</label>
								<select class="form-control" name="parent">
									<option value="0">Kategori utama (Bukan Sub)</option>
									<?php 
									foreach($kategori as $k){
										?>
										<option <?php if(set_value('parent') == $k->kategori_id){ echo "selected='selected'"; } ?> value="<?php echo $k->kategori_id ?>"><?php echo $k->kategori_nama ?></option>
										<?php 
									}
									?>
								</select>
								<?php echo form_error('parent'); ?>
							</div>

						</div>
						<div class="box-footer">
							<input type="submit" class="btn btn-success" value="Simpan">
						</div>
					</div>
				</form>

			</div>
		</div>

	</section>

</div>