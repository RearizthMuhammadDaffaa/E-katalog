<?php
 //load koneksi database
 include '../../koneksi.php';

 //ambil data dari form
 $judul_twitter = $_POST['judul_twitter_post'];
 $isi_twitter = $_POST['isi_twitter_post'];
 
 //

 //proses upload gambar

 //
 //simpan data ke database
 $insert = mysqli_query($koneksi, "INSERT INTO tb_twitter VALUES (NULL,'$judul_twitter','$isi_twitter')");
 //
 //cek apakah proses simpan ke database berhasil
 if($insert){
 //jika berhasil tampilkan pesan berhasil simpan data
 echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php';
 </script>";
 }else{
 //jika gagal tampilkan pesan gagal simpan data
 echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php';
 </script>";
 }
 //
?>
