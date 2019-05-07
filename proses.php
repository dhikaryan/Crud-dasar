<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$foto  = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$foto";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$foto</b> sukses di upload";
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","lbb");

  $query = "INSERT INTO siswa ('','','',foto)
            VALUES('','','',$foto')";
            
  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
header("location:index.php");
?>