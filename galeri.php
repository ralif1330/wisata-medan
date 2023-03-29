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
  <title>WISATA</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/font-icon.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/i.png">
</head>

<body>
<!-- header section -->
<section>
  <?php include "nav.php"; ?>
</section>
<!-- header section --> 

<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
    <?php 
      if(!isset($_SESSION['admin'])){
          ?>
          <h6>GALERI</h6>
           <p>Foto - foto berbagai destinasi wisata menarik di Kota Medan dari berbagai sudut yang dapat menjadi inspirasi liburan Anda dan Keluarga.</p>
          <br>
          </li>
          <?php }else{?>
          <h6>GALERI</h6>
          <br>
          </li>
      <?php }?>
                  
    </div>
  </div>
<br>
<br>
<!-- intro section --> 
<!-- services section -->
<!-- services section --> 
<!-- work section -->

<!--       <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/foto/alam/a1.jpg" class="work-box"> <img src="images/foto/alam/a1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Wisata Alam</h5>
            <p>Taman g </p>
          </div>
        </div>
        </a> 
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/foto/alam/b1.jpg" class="work-box"> <img src="images/foto/alam/b1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Wisata Alam</h5>
            <p>Taman Wisata</p>
          </div>
        </div>
        </a> 
      </div>
 -->

<div class="container-fluid">
    <div class="row no-gutter">
      <?php
      // Load file koneksi.php
      include "koneksi.php";    
      $query = "SELECT * FROM galeri"; 
      $sql = mysqli_query($connect, $query); 
      while($data = mysqli_fetch_array($sql)){
        ?>
         <div class="col-lg-3 col-md-6 col-sm-6 work"> 
            <a <?php echo "href='images/foto/".$data['foto']."'" ;?>  class="work-box">
            <?php echo "<img src='images/foto/".$data['foto']."' width='315' height='171' >";?> 
            <!--  gambar galeri harus sama size nya -->
            <div class="overlay">
              <div class="overlay-caption">
                <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
                <p> <?php echo "".$data['nama_tempat'].""; ?></p>
              </div>
            </div>
            </a>
          </div>
      <?php }?>
    </div>
<br><br>
<br><br>

              <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <br>
                    </li>
                    <?php }else{?>
                    <br>
                      <h6 align="center">Kelola Data Galeri</h6>
                      <br>
                      <br>
                      <a href="form_simpan.php"><input type="submit" class="btn btn-large" value="Tambah Data"  ></a>
                      <br>
                      <br>
              <table border="2" width="100%">
                    <tr>
                    <th>Gambar</th>
                    <th>Jenis Wisata</th>
                    <th>Nama Tempat</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                <?php
                // Load file koneksi.php
                include "koneksi.php";
  
                      $query = "SELECT * FROM galeri"; // Query untuk menampilkan semua data galeri
                      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                      echo "<tr>";
                      echo "<td align='center'><img src='images/foto/".$data['foto']."' width='400' height='200' ></td>";
                      echo "<td>".$data['jenis_wisata']."</td>";
                      echo "<td>".$data['nama_tempat']."</td>";
                      echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
                      echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
                      echo "</tr>";
                  }
                ?>
              </table>                    
      <?php }?>
  </div>
</section>


<!-- work section --> 
<!-- our team section -->
<!-- our team section --> 
<!-- Testimonials section -->
<!-- Testimonials section --> 
<!-- contact section -->
<!-- contact section --> 

<!-- Footer section -->
<?php include "footer.php"; ?>
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