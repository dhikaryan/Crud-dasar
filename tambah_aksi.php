<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_s'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon= $_POST['telpon'];
$foto= $_POST['foto'];

// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('$id','$nama','$alamat','$telpon','$foto')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>