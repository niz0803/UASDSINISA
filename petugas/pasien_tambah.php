<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">

				<?php 

				if(isset($_GET['alert'])){
					if($_GET['alert'] == "ada"){
						echo "<div class='alert alert-danger text-center'><b>GAGAL</b>. ID Pasien sudah pernah digunakan sebelumnya.</div>";
					}
				}
				?>


				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Tambah Pasien Baru</h4>
						<div class="heading-elements">
							<a href="pasien.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="pasien_act.php" method="post">
								<table class="table">
									<tr>
										<th width="20%">ID PASIEN</th>										
										<td><input class="form-control" type="number" name="id_pasien" required="required"></td>
									</tr>
									<tr>
										<th>NAMA</th>										
										<td><input class="form-control" type="text" name="nama" required="required"></td>
									</tr>																	
									<tr>
										<th>JENIS KELAMIN</th>
										<td>
											<select name="jk" class="form-control" required="required">
												<option value="Laki-laki">Laki-laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
										</td>
									</tr>	
									<tr>
										<th>ALAMAT</th>
										<td><input class="form-control" type="text" name="alamat" required="required"></td>
									</tr>	
									<tr>
										<th>NO TELP</th>
										<td><input class="form-control" type="number" name="hp" required="required"></td>
									</tr>										
									<tr>
										<th></th>
										<td><input type="submit" value="SIMPAN" class="btn btn-sm btn-primary"></td>
									</tr>		
								</table>
							</form>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		

	</div>
</div>

<?php include 'footer.php'; ?>