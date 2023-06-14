<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id = $_POST['id'];
$judul_twitter_post = $_POST['judul_twitter_post'];
$isi_twitter_post = $_POST['isi_twitter_post'];

//

//proses upload gambar

//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_twitter SET
 judul = '$judul_twitter_post' ,isi = '$isi_twitter_post' WHERE id = '$id'");
//cek apakah proses edit ke database berhasil
if ($update) {
  //jika berhasil tampilkan pesan berhasil edit data
  echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal edit data
  echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php';
 </script>";
}
 //
