<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

// update data ke database
mysqli_query($koneksi,"update siswa set NAMA_SISWA='$nama', ALAMAT_SISWA='$alamat', TELPON_SISWA='$telpon' where id_siswa='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>