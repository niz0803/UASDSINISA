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
						<h4 class="panel-title">Data Petugas</h4>
						<div class="heading-elements">
							<a href="petugas_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped table-datatable">
							<thead>
								<tr>
									<th width="1%">No</th>
									<th width="15%">NAMA</th>
									<th>JENIS KELAMIN</th>		
									<th>ALAMAT</th>		
									<th>NO TELP</th>		
									<th>EMAIL</th>		
									<th>USERNAME</th>		
									<th width="10%">OPSI</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1; 
							$data = mysqli_query($koneksi,"select * from petugas");		
							while($d=mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $d['nama_petugas'] ?></td>
									<td><?php echo $d['jenis_kelamin_petugas'] ?></td>			
									<td><?php echo $d['alamat'] ?></td>			
									<td><?php echo $d['no_telp'] ?></td>			
									<td><?php echo $d['email'] ?></td>			
									<td><?php echo $d['username_petugas'] ?></td>			
									<td>									
										<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="petugas_edit.php?id=<?php echo $d['id_petugas'];?>"><i class="icon-wrench3"></i></a>
										<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="petugas_hapus.php?id=<?php echo $d['id_petugas'];?>"><i class="icon-trash-alt"></i></a>
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