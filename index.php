<!DOCTYPE html>
<html>
<head>
	<title>CRUD BIMBEL</title>
</head>
<body>
 
	<h2>CRUD DATA SISWA BIMBEL</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH SISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No. Telpon</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NAMA_SISWA']; ?></td>
				<td><?php echo $d['ALAMAT_SISWA']; ?></td>
				<td><?php echo $d['TELPON_SISWA']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['ID_SISWA']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['ID_SISWA']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>