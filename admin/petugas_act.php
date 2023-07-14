<?php 

include '../koneksi.php';
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);


mysqli_query($koneksi,"insert into petugas values(NULL,'$nama','$jk','$alamat','$hp','$email','$username','$password')");
header("location:petugas.php");