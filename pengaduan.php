<?php include "header.php"; ?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">LAYANAN PENGADUAN DAN SARAN PASIEN</h2>
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
						<div class="col-md-6 col-md-offset-3 md-margin-bottom-20">
							<div class="card small">
								<div class="card-content" style="color:black!important">
									<?php 
									if(isset($_GET['pesan'])){
										if($_GET['pesan'] == "sukses"){
											?>
											<div style="width: 100%" class="alert text-center alert-success">TERIMA KASIH! PENGADUAN ANDA TELAH MASUK KE SERVER KAMI. DAN AKAN SEGERA DI PROSES. INFORMASI SELANJUTNYA BISA ANDA CEK PADA MENU "CEK PENGADUAN".</div>
											<?php
										}else if($_GET['pesan'] == "failed"){
											?>
											<div style="width: 100%" class="alert text-center alert-danger">MAAF! ID PASIEN ANDA TIDAK DI TEMUKAN ATAU BELUM TERDAFTAR. SILAHKAN HUBUNGI ADMIN RS</div>
											<?php
										}
									}
									?>

									<br/>
									<form action="pengaduan_act.php" method="post">
										<p class="text-center">Isi ID Pasien anda pada form berikut. jika ID Pasien benar, maka anda akan tampil otomatis.</p>
										<br/>
										<br/>
										<label>ID Pasien</label>
										<input type="text" name="id_pasien" required="required" autocomplete="off" class="form-control id_pasien" placeholder="ID Pasien ..">							
										<br/>
										<div class="tempat_id_pasien"></div>

										<label>ISI PENGADUAN</label>	
										<textarea class="form-control" style="resize: none;" name="isi"></textarea>
										<br/>
										<input type="submit" name="" value="Kirim" class="btn btn-primary">
									</form>
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

