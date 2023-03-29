<?php

include "koneksi.php";
// Ambil data id yang dikirim oleh artikel.php melalui URL
$id = $_GET['id'];

$query2 = "DELETE FROM tbl_penilaian WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: penilaian.php"); // Redirect ke halaman artikel.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='penilaian.php'>Kembali</a>";
}
?>