<!DOCTYPE html>
<html>
<head>
	<title>CRUD BIMBEL</title>
</head>
<body>

	<h2>CRUD DATA SISWA BIMBEL</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where ID_SISWA='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['ID_SISWA']; ?>">
						<input type="text" name="nama" value="<?php echo $d['NAMA_SISWA']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['ALAMAT_SISWA']; ?>"></td>
				</tr>
				<tr>
					<td>No. Telpon</td>
					<td><input type="text" name="telpon" value="<?php echo $d['TELPON_SISWA']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>