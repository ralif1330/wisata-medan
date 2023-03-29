<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$id_lokasi = $_POST['id_lokasi'];
$jarak = $_POST['jarak'];
$harga = $_POST['harga'];
$fasilitas = $_POST['fasilitas'];
$mobilitas = $_POST['mobilitas'];
$id_titikawal = $_POST['id_titikawal'];
  
  // Proses ubah data ke Database
  $query = "UPDATE tbl_penilaian SET id_lokasi='".$id_lokasi."', jarak='".$jarak."', harga='".$harga."', fasilitas='".$fasilitas."' , mobilitas='".$mobilitas."' , id_titikawal='".$id_titikawal."' WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: penilaian.php"); // Redirect ke halaman 
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah_penilaian.php'>Kembali Ke Form</a>";
  }


?>