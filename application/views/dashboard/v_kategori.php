<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Kategori
			<small>Kategori Artikel</small>
		</h1>
	</section>


	<?php 
	function get_child($id){
		$ci =& get_instance();
		$kategori = $ci->db->query("select * from kategori where kategori_parent='$id'")->result();
		foreach($kategori as $k){
			?>
			<ul class="">
				<li class="list-group-item">
					<a href="<?php echo base_url().'dashboard/kategori_edit/'.$k->kategori_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
					<a onclick="return confirm('Yakin ingin hapus?')" href="<?php echo base_url().'dashboard/kategori_hapus/'.$k->kategori_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
					&nbsp;
					<i class="<?php echo $k->kategori_icon ?>"></i> &nbsp; <?php echo $k->kategori_nama; ?>									
					<small><i><?php echo $k->kategori_slug; ?></i></small>
				</li>
				<?php get_child($k->kategori_id); ?>
			</ul>
			<?php
		}
	}
	?>

	<section class="content">

		<div class="row">
			<div class="col-lg-12">
				
				<a href="<?php echo base_url().'dashboard/kategori_tambah'; ?>" class="btn btn-sm btn-primary">Buat Kategori baru</a>

				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Kategori</h3>
					</div>
					<div class="box-body">

						<ul class="list-group">
							<?php 
							$no = 1;
							foreach($kategori as $k){ 
								?>
								<li class="list-group-item">
									<a href="<?php echo base_url().'dashboard/kategori_edit/'.$k->kategori_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
									<a onclick="return confirm('Yakin ingin hapus?')" href="<?php echo base_url().'dashboard/kategori_hapus/'.$k->kategori_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
									&nbsp;
									<i class="<?php echo $k->kategori_icon ?>"></i> &nbsp; <?php echo $k->kategori_nama; ?>									
									<small><i><?php echo $k->kategori_slug; ?></i></small>
								</li>
								<?php get_child($k->kategori_id); ?>
								
								<?php 
							} 
							?>
						</ul>

					</div>
				</div>

			</div>
		</div>

	</section>

</div>