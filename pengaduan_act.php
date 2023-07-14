<?php 

include 'koneksi.php';
$id_pasien = $_POST['id_pasien'];

$isi = $_POST['isi'];

$cek = mysqli_query($koneksi,"select * from pasien where pasien_id_pasien='$id_pasien'");
if(mysqli_num_rows($cek) > 0){

	$cd = mysqli_fetch_array($cek);
	$pasien_id = $cd['pasien_id'];

	date_default_timezone_set("Asia/Bangkok");
	date('Y-m-d H:i:s'); 
	$waktu = date('Y-m-d H:i:s');
	mysqli_query($koneksi,"insert into pengaduan values(NULL,'$pasien_id','$isi','$waktu','0')");
	// status
	// 0 = menunggu konfirmasi petugas
	// 1 = selesai

	header("location:pengaduan.php?pesan=sukses");
}else{
	header("location:pengaduan.php?pesan=failed");
}


?>