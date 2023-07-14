<?php 

include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi,"delete from pasien where pasien_id='$id'");

mysqli_query($koneksi,"delete from pengaduan where id_pasien='$id'");

header("location:pasien.php");
?>