<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Data Pasien</h4>
						<div class="heading-elements">
							<a href="pasien_cetak.php" target="_blank" class="btn btn-sm btn-primary"><i class="icon-file-empty"></i> CETAK</a>
							<a href="pasien_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="icon-file-empty"></i> PRINT</a>
							<a href="pasien_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped table-datatable">
							<thead>
								<tr>
									<th width="1%">No</th>
									<th width="15%">ID PASIEN</th>
									<th width="15%">NAMA PASIEN</th>
									<th>JENIS KELAMIN</th>		
									<th>ALAMAT</th>		
									<th>NO TELP</th>											
									<th width="10%">OPSI</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1; 
							$data = mysqli_query($koneksi,"select * from pasien");		
							while($d=mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $d['pasien_id_pasien'] ?></td>
									<td><?php echo $d['pasien_nama'] ?></td>
									<td><?php echo $d['pasien_jk'] ?></td>			
									<td><?php echo $d['pasien_alamat'] ?></td>			
									<td><?php echo $d['pasien_telp'] ?></td>													
									<td>									
										<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="pasien_edit.php?id=<?php echo $d['pasien_id'];?>"><i class="icon-wrench3"></i></a>
										<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="pasien_hapus.php?id=<?php echo $d['pasien_id'];?>"><i class="icon-trash-alt"></i></a>
									</td>
								</tr>
								<?php
							}
							?>
							</tbody>
						</table>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		
	
		<div class="footer text-muted">
			
		</div>

	</div>
</div>

<?php include 'footer.php'; ?>