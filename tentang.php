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
                    <h6>TENTANG KAMI</h6>
                    <p>Sebuah website yang menyajikan objek - objek wisata sekitar Kota Medan yang cocok bagi Anda yang ingin mencari tempat wisata di sekitar Kota Medan</p>
                    </li>
                    <?php }else{?>
                    <h6>TENTANG KAMI</h6>
                    </li>
      <?php }?>   
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map-pin" style="color:#F60"></span>
        <div class="services-content">
          <h5>OUR OFFICE LOCATION</h5>
          <p>Jl. Prof. H. M. Yamin No.40, Gg. Buntu, Kec. Medan Tim., Kota Medan, Sumatera Utara 20232</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
        <div class="services-content">
          <h5>EMAIL</h5>
          <p>dinaspariwisatakotamedan@gmail.com</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
        <div class="services-content">
          <h5>PHONE NUMBER</h5>
          <p>(061) 4525248</p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31855.778321891536!2d98.66270583673837!3d3.5938276973847785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c716d58fd7%3A0x3eba2bd9a0033343!2sDinas%20Pariwisata!5e0!3m2!1sen!2sid!4v1665595174734!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- work section -->
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