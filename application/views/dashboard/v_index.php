<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">

			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo $jumlah_produk ?></h3>

						<p>Jumlah Produk</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-list"></i>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $jumlah_invoice ?></h3>

						<p>Jumlah Invoice / Pesanan</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-document"></i>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo $jumlah_kategori ?></h3>

						<p>Jumlah Kategori</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo $jumlah_admin ?></h3>

						<p>Jumlah Admin</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="col-lg-6">
				
				<div class="box box-primary">
					<div class="box-body">
						<h3>Selamat Datang !</h3>

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tr>
									<th width="%">Nama</th>
									<th width="1px">:</th>
									<td>
										<?php 
										$id_user = $this->session->userdata('id');
										$user = $this->db->query("select * from admin where admin_id='$id_user'")->row();
										?>
										<p><?php echo $user->admin_nama; ?></p>
									</td>
								</tr>
								<tr>
									<th width="20%">Username</th>
									<th width="1px">:</th>
									<td><?php echo $this->session->userdata('username') ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

	</section>

</div>