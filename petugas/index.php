<?php include 'header.php'; ?>
<div class="content-wrapper">

	<div class="content">

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">

				<div class="row">

					<div class="col-lg-12">
						<div class="alert alert-info text-center">ANDA LOGIN SEBAGAI <b>PETUGAS</b></div>
					</div>

					<div class="col-lg-3">
						<div class="panel bg-blue">
							<div class="panel-body">
								<?php $posting=mysqli_query($koneksi,"select * from posting"); ?>
								<h3 class="no-margin"><?php echo mysqli_num_rows($posting) . " Artikel"; ?></h3>
								Jumlah Artikel Website
							</div>
							<div class="container-fluid">
								<div id="members-online"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="panel bg-blue">
							<div class="panel-body">
								<?php $kriteria=mysqli_query($koneksi,"select * from petugas"); ?>
								<h3 class="no-margin"><?php echo mysqli_num_rows($kriteria) . " Petugas"; ?></h3>
								Jumlah Petugas
							</div>
							<div class="container-fluid">
								<div id="members-online"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="panel bg-blue">
							<div class="panel-body">
								<?php $pengaduan=mysqli_query($koneksi,"select * from pengaduan"); ?>
								<h3 class="no-margin"><?php echo mysqli_num_rows($pengaduan) . " Pengaduan"; ?></h3>
								Jumlah Pengaduan Layanan
							</div>
							<div id="server-load"></div>
						</div>

					</div>

					<div class="col-lg-3">
						<div class="panel bg-blue">
							<div class="panel-body">									
								<?php $pengguna=mysqli_query($koneksi,"select * from pasien"); ?>
								<h3 class="no-margin"><?php echo mysqli_num_rows($pengguna) . " Pasien"; ?></h3>
								Jumlah Pasien								
							</div>
							<div id="today-revenue"></div>
						</div>
					</div>

				</div>


				<div class="row">

					<div class="col-lg-6">
						<div class="panel bg-pink">
							<div class="panel-body">
								<?php $posting=mysqli_query($koneksi,"select * from pengaduan where status_pengaduan='0'"); ?>
								<p class="no-margin"><b><?php echo mysqli_num_rows($posting); ?> Pengaduan </b> menunggu konfirmasi.</p>
							</div>
							<div class="container-fluid">
								<div id="members-online"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="panel bg-pink">
							<div class="panel-body">
								<?php $posting=mysqli_query($koneksi,"select * from pengaduan where status_pengaduan='1'"); ?>
								<p class="no-margin"><b><?php echo mysqli_num_rows($posting); ?> Pengaduan </b> selesai.</p>
							</div>
							<div class="container-fluid">
								<div id="members-online"></div>
							</div>
						</div>
					</div>

				</div>


				<div class="panel panel-flat">					

					<div class="panel-body">
						<h4>10 Pengaduan Terbaru Dari Pasien</h4>
						<center>
							<br/>
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th width="1%">No</th>
											<th>WAKTU PELAPORAN</th>		
											<th>ID PASIEN</th>		
											<th width="15%">NAMA PASIEN</th>
											<th>JENIS KELAMIN</th>		
											<th>ALAMAT</th>		
											<th>NO TELP</th>		
											<th>STATUS</th>																													
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
												<td><?php echo $d['pasien_nama'] ?></td>
												<td><?php echo $d['pasien_jk'] ?></td>			
												<td><?php echo $d['pasien_alamat'] ?></td>			
												<td><?php echo $d['pasien_telp'] ?></td>			
												<td>
													<center>
														<?php 
														if($d['status_pengaduan'] == "0"){
															echo "<span class='badge badge-danger'>Menunggu konfirmasi</span>";
														}else{
															echo "<span class='badge badge-success'>Diterima</span>";
														}
														?>
													</center>
												</td>	

											</tr>
											<?php
										}
										?>
									</tbody>
								</table>
							</div>	
							
							<br/>
						</center>
					</div>

				</div>
				

			</div>
		</div>


		<div class="footer text-muted">
			
		</div>

	</div>

</div>

<?php include 'footer.php'; ?>