<?php include "header.php"; ?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">CEK LAYANAN PENGADUAN DAN SARAN</h2>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div class="container content">		
		<div class="about">
			<div class="about home-about">
				<div class="container">

					<div class="row">
						<div class="col-md-8 col-md-offset-2 md-margin-bottom-40">
							<div class="card small">
								<div class="card-content" style="color:black!important">
									<?php 
									if(isset($_GET['id_pasien'])){
										?>

										<h4>Status Pengaduan Anda</h4>

										<table class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th width="1%">No</th>
													<th>PENGADUAN</th>
													<th width="23%">STATUS</th>																														
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												$id_pasien = $_GET['id_pasien'];
												$data = mysqli_query($koneksi,"select * from pengaduan,pasien where pengaduan.id_pasien=pasien.pasien_id and pasien.pasien_id_pasien='$id_pasien' order by id_pengaduan desc");		
												if(mysqli_num_rows($data) > 0){
													while($d=mysqli_fetch_array($data)){
														?>
														<tr>
															<td><?php echo $no++; ?></td>
															<td><?php echo $d['isi_pengaduan'] ?></td>
															<td>
																<?php 
																if($d['status_pengaduan'] == "0"){
																	echo "Menunggu konfirmasi";
																}else{
																	echo "Diterima & Selesai";
																}
																?>
															</td>																																
														</tr>
														<?php
													}

												}else{
													?>
													<tr>
														<td colspan="3" class="text-center">DATA ID PASIEN TIDAK DITEMUKAN.</td>
													</tr>
													<?php
												}

												?>
											</tbody>
										</table>

										<a href="cek_pengaduan.php" class="btn btn-primary">CEK LAGI</a>

									<?php }else{ ?>
										<form action="cek_pengaduan.php" method="get">
											<p class="text-center text-dark">Silahkan isi ID Pasien anda. kemudian klik tombol "CEK". Maka data pengaduan anda akan tampil lengkap dengan statusnya.</p>
											<br/>
											<br/>
											<br/>
											<br/>
											<label>ID pasien</label>
											<input type="text" name="id_pasien" class="form-control" placeholder="Masukkan ID PASIEN" required="required">							
											<br/>									
											<br/>
											<input type="submit" name="" value="CEK" class="btn btn-primary">
										</form>	
									<?php } ?>		
								</div>
							</div>        
						</div>
					</div>

					<br> 
				</div> 
			</div>
		</div>
	</div>
</section>
<?php include "footer.php"; ?>

