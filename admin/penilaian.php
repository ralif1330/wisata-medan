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
     <h6 align="center">Tambah Data Penilaian Lokasi Wisata</h6>
      <form method="post" action="proses_simpan_penilaian.php" enctype="multipart/form-data">

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
                <label>Lokasi Wisata</label>
                  <?php
                    include_once("../konek_select.php");
                    $tdk = "SELECT * FROM tbl_alternatif";
                    $tdkDb = mysql_query($tdk,$server) or die(mysql_error());
                    $tdkR = mysql_fetch_assoc($tdkDb);
                  ?>
                  <select name="id_lokasi" class="form-control">
                    <option value=""> - Pilih -</option>
                    <?php
                    do {
                    ?>
                        <option value="<?php echo $tdkR['id_lokasi'];?>"><?php echo 
                        $tdkR['lokasi'];?></option>
                    <?php
                    } while($tdkR=mysql_fetch_assoc($tdkDb));
                    ?>  
                  </select>
                <label>Titik Awal</label>
                  <?php
                    include_once("../konek_select.php");
                    $tdk = "SELECT * FROM tbl_titikawal";
                    $tdkDb = mysql_query($tdk,$server) or die(mysql_error());
                    $tdkR = mysql_fetch_assoc($tdkDb);
                  ?>
                  <select name="id_titikawal" class="form-control">
                    <option value=""> - Pilih -</option>
                    <?php
                    do {
                    ?>
                        <option value="<?php echo $tdkR['id_titikawal'];?>"><?php echo 
                        $tdkR['awal_lokasi'];?></option>
                    <?php
                    } while($tdkR=mysql_fetch_assoc($tdkDb));
                    ?>  
                  </select>
                <label>Jarak (dalam KM)</label>
                  <input class="form-control" type="text" name="jarak" id="jarak" placeholder ="" required>
                <label>Harga</label>
                    <input class="form-control" type="text" name="harga" id="harga" placeholder ="" required>
                <label>Fasilitas</label>
                    <input class="form-control" type="text" name="fasilitas" id="fasilitas" placeholder ="" required>
                <label>Rating</label>
                    <input class="form-control" type="text" name="mobilitas" id="mobilitas" placeholder ="" required>
                <label></label>
              <button class="btn btn-block btn-info" name="insert_data" type="submit" >Simpan Data</button>
            </div>
          </div>
        </div>
        
      </form>
  </section> 
<!-- Artikel section --> 
<!-- Article Data Control -->
<br>
<br>
    <h6 align="center">Seluruh Data Penilaian Lokasi Wisata</h6>
        <br>
            <table border="1" width="90%" align="center">
                  <tr>                    
                    <td align=center><strong>Lokasi</strong></td>
                    <td align=center><strong>Titik Awal</strong></td>
                    <td align=center><strong>Jarak (dalam KM)</strong></td>
                    <td align=center><strong>Harga (Rp)</strong></td>
                    <td align=center><strong>Fasilitas</strong></td>
                    <td align=center><strong>Rating</strong></td>
                    <td colspan="2" align=center><strong>Aksi</strong></td>
                  </tr>
              <?php
              // Load file koneksi.php
              include "koneksi.php"; 

                    $query = "SELECT * FROM q_penilaian2 order by id_titikawal, id_lokasi ASC"; // Query untuk menampilkan semua data galeri
                    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td align='center'>".$data['lokasi']."</td>";
                    echo "<td align='center'>".$data['awal_lokasi']."</td>";
                    echo "<td align='center'>".$data['jarak']."</td>";
                    echo "<td align='center'>".$data['harga']."</td>";
                    echo "<td align='center'>".$data['fasilitas']."</td>";
                    echo "<td align='center'>".$data['mobilitas']."</td>";
                    echo "<td align='center'><a href='form_ubah_penilaian.php?id=".$data['id']."'> Ubah </a></td>";
                    echo "<td align='center'><a href='proses_hapus_penilaian.php?id=".$data['id']."'> Hapus </a></td>";
                    echo "</tr>";
                }
              ?>
            </table>
            <br></br>
            <br></br>
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