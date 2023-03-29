<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$id_lokasi = $_POST['id_lokasi'];
$id_titikawal = $_POST['id_titikawal'];
$jarak = $_POST['jarak'];
$harga = $_POST['harga'];
$fasilitas = $_POST['fasilitas'];
$mobilitas = $_POST['mobilitas'];

  // Proses simpan ke Database
  $query = "INSERT INTO tbl_penilaian VALUES('".$id."', '".$id_lokasi."', '".$jarak."', '".$harga."', '".$fasilitas."', '".$mobilitas."', '".$id_titikawal."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: penilaian.php"); // Redirect ke halaman galeri.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan_penilaian.php'>Kembali Ke Form</a>";
  }

?>