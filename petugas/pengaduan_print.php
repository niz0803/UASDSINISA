<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
	}

	table, th, td {
		border: 1px solid black;
		font-size: 11pt;
		text-align: center;
	}
</style>
<center>
	<h3>Data Pengaduan Layanan</h3>
</center>
<table>
	<thead>
		<tr>
			<th width="1%">No</th>
			<th>WAKTU PELAPORAN</th>		
			<th>ID PEL</th>		
			<th width="15%">NAMA PASIEN</th>
			<th>JENIS KELAMIN</th>		
			<th>ALAMAT</th>		
			<th>NO TELP</th>		
			<th>STATUS</th>																						
		</tr>
	</thead>
	<tbody>
		<?php
		include '../koneksi.php';
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
		?>
	</tbody>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>