<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if($_POST['password'] != ""){
	mysqli_query($koneksi,"update petugas set nama_petugas='$nama', jenis_kelamin_petugas='$jk', alamat='$alamat', no_telp='$hp', email='$email', username_petugas='$username', password_petugas='$password' where id_petugas='$id'");	
}else{
	mysqli_query($koneksi,"update petugas set nama_petugas='$nama', jenis_kelamin_petugas='$jk', alamat='$alamat', no_telp='$hp', email='$email', username_petugas='$username' where id_petugas='$id'");		
}
header("location:petugas.php");
