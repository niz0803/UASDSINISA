<?php 

include '../koneksi.php';
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$konten = $_POST['konten'];
$tanggal = date('Y-m-d');
// $sampul = $_POST['sampul'];


$ekstensi_diperbolehkan	= array('png','jpg');
$sampul = $_FILES['sampul']['name'];
$x = explode('.', $sampul);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['sampul']['size'];
$file_tmp = $_FILES['sampul']['tmp_name'];	
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	if($ukuran < 1044070){			
		move_uploaded_file($file_tmp, '../images/posting/'.$sampul);
	}else{
		echo 'UKURAN FILE TERLALU BESAR';
	}
}else{
	echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}


mysqli_query($koneksi,"insert into posting values(NULL,'$judul','$tanggal','$konten','$sampul','$kategori')");
header("location:posting.php");