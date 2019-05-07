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
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>ID</td>
				<td><input type="text" name="id_s"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No. Telpon</td>
				<td><input type="text" name="telpon"></td>
			</tr>

			<tr>
			<td>
			<form enctype="multipart/form-data" method="POST" action="proses.php">
            Silahkan Upload Foto : 
			<td>
            <input type="file" name="fupload"><br>
            </td>
        	</form>
        	</td>
        	</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>