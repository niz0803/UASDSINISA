<?php 

include '../koneksi.php';
$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];


$cek = mysqli_query($koneksi,"select * from pasien where pasien_id_pasien='$id_pasien'");

if(mysqli_num_rows($cek) > 0){
	header("location:pasien_tambah.php?alert=ada");
}else{
	mysqli_query($koneksi,"insert into pasien values(NULL,'$id_pasien','$nama','$jk','$alamat','$hp')");
	header("location:pasien.php");
}

