<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>

<?php
require_once('bdd.php');
$sql = "SELECT id, title, keterangan, start, end, color FROM events ";
$req = $bdd->prepare($sql);
$req->execute();
$events = $req->fetchAll();
?>
 
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include "head.php"; ?>

</head>

<body>
<!-- header section -->
<section>
  <?php include "nav.php"; ?>
  <!-- banner text -->
</section>
<!-- header section --> 
<!-- 
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6>KELOLA DATA ARTIKEL</h6>
    </div>
  </div>
</section>
<!-- header section -->

  <section  class="section intro">
     <br></br>
     <br></br>
     <h6 align="center">Tambah Data Artikel</h6>
      <form method="post" action="proses_simpan_artikel.php" enctype="multipart/form-data">

        <!--
        <table cellpadding="20" align="center">
          <tr>
            <td>Judul</td>
            <td><input type="text" name="judul"></td>
          </tr>
          <br>
          <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan"></td>
          </tr>
          <tr> 
            <td>Alamat URL</td>
            <td><input type="text" name="url"></td>
          </tr>
          <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
          </tr>  
          <td><input type="submit" value="Simpan"></td>
          <td><a href="artikel.php"><input type="button" value="Batal"></a></td>
        </table>
        -->

        <div class="container h-100">
          <div class="col-md-12">
            <div class="form-group">
                <label>Judul Artikel</label>
                  <input class="form-control" type="text" name="judul" id="judul" required>
                <label>Keterangan</label>
                  <textarea class="form-control" type="text" name="keterangan" id="keterangan" placeholder ="" required></textarea>
                <label>Alamat URL</label>
                    <input class="form-control" type="text" name="url" id="url" placeholder ="" required>
                <label>Foto</label>
                    <input type="file" name="foto">
                <label></label>
              <button class="btn btn-block btn-info" name="insert_data" type="submit" >Simpan Data</button>
            </div>
          </div>
        </div>
        
      </form>

      <br></br>
      <br></br>
  </section> 
<!-- Artikel section --> 
<!-- Article Data Control -->
<br>
<br>
    <h6 align="center">Seluruh Data Artikel Wisata</h6>
        <br>
            <table border="1" width="90%" align="center">
                  <tr>
                    <th align="center">Gambar</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Alamat URL</th>
                    <th colspan="2">Aksi</th>
                  </tr>
              <?php
              // Load file koneksi.php
              include "koneksi.php";

                    $query = "SELECT * FROM artikel"; // Query untuk menampilkan semua data galeri
                    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td align='center'><img src='../images/foto/".$data['foto']."' width='400' height='200' ></td>";
                    echo "<td>".$data['judul']."</td>";
                    echo "<td>".$data['keterangan']."</td>";
                    echo "<td>".$data['url']."</td>";
                    echo "<td><a href='form_ubah_artikel.php?id=".$data['id']."'> Ubah </a></td>";
                    echo "<td><a href='proses_hapus_artikel.php?id=".$data['id']."'> Hapus </a></td>";
                    echo "</tr>";
                }
              ?>
            </table>
  </div>
</section>

<!-- Footer section -->
<?php include "footer.php"; ?>
<!-- footer top --> 
  
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>