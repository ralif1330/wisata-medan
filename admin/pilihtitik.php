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

include "koneksi.php";
mysqli_query($connect,"truncate table temp_proses");
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
      <br><br>
      <br><br>
     <h6 align="center">PERHITUNGAN DENGAN METODE SIMPLE ADDITIVE WEIGHTING (SAW)</h6><p>
     <h6 align="center">Pilih Titik Awal Lokasi Anda</h6>
     <br><br>
      <form method="post" action="proses_saw.php" enctype="multipart/form-data">        
        <div class="container h-100">
          <div class="col-md-12">
            <div class="form-group">
                <label>Pilih Titik Awal</label>
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
                <label></label>
              <button class="btn btn-block btn-info" name="insert_data" type="submit" >Tampilkan Data</button>
            </div>
          </div>
        </div>        
      </form>
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