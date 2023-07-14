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
						<h4 class="panel-title">Data Pengaduan Pelayanan</h4>
						<div class="heading-elements">
							<a href="pengaduan_cetak.php" target="_blank" class="btn btn-sm btn-primary"><i class="icon-file-empty"></i> CETAK</a>
							<a href="pengaduan_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="icon-file-empty"></i> PRINT</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-datatable">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th width="15%">WAKTU PELAPORAN</th>		
										<th width="12%">ID PEL</th>		
										<th width="20%">DATA PASIEN</th>
										<th>ISI PENGADUAN</th>		
										<th width="10%">STATUS</th>											
										<th width="15%">OPSI</th>											
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									$data = mysqli_query($koneksi,"select * from pengaduan,pasien where pengaduan.id_pasien=pasien.pasien_id");		
									while($d=mysqli_fetch_array($data)){
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo date('H:s | d-m-Y', strtotime($d['waktu_lapor'])) ?></td>			
											<td><?php echo $d['pasien_id_pasien'] ?></td>
											<td>
												<b>NAMA : </b><?php echo $d['pasien_nama'] ?>
												<br>
												<b>JENIS KELAMIN : </b><?php echo $d['pasien_jk'] ?>
												<br>
												<b>ALAMAT : </b>
												<?php echo $d['pasien_alamat'] ?>
												<br>
												<b>TELP : </b>
												<?php echo $d['pasien_telp'] ?>
											</td>
											<td>
												<?php echo $d['isi_pengaduan'] ?>
											</td>			
											<td>
												<center>
													<?php 
													if($d['status_pengaduan'] == "0"){
														echo "<span class='badge badge-danger'>Menunggu konfirmasi</span>";
													}else{
														echo "<span class='badge badge-success'>Diterima & selesai</span>";
													}
													?>
												</center>
											</td>	
											<td>									
												<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="pengaduan_edit.php?id=<?php echo $d['id_pengaduan'];?>"><i class="icon-wrench3"></i> &nbsp; UBAH STATUS</a>
												<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="pengaduan_hapus.php?id=<?php echo $d['id_pengaduan'];?>"><i class="icon-trash-alt"></i></a>
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