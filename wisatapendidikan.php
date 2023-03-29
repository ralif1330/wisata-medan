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
    <br>
      <h6>WISATA PENDIDIKAN</h6>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->

<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/pendidikan/rahmat1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/rahmat2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/rahmat3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Museum Rahmat Gallery</h2>
                <p align="justify">Galeri Rahmat (Rahmat International Wildlife Museum & Gallery) merupakan galeri bertaraf internasional satu-satunya di asia yang memiliki kurang lebih 2000 koleksi spesies binatang liar (yang telah diawetkan) berasal dari perburuan legal dengan konservasi dan pemanfaatan yang telah dilakukan oleh hampir seluruh negara, binatang-binatang yang mati ditaman-taman, pemberian dari berbagai negara dan hasil pembelian secara legal” – inilah sedikit kutipan dari prasasti yang tepampang pada dinding bagian luar galeri Rahmat Medan.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. S. Parman No.309, Petisah Hulu, Kec. Medan Baru, Kota Medan, Sumatera Utara 20152</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>https://rahmatgallery.com/</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(061) 4569964</p>
                  </div>
                </div>
              </div>
            </div>
      </section>
  </div>
</section>

<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/pendidikan/situs1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/situs2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/situs3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Museum Situs Kota Cina</h2>
                <p align="justify">Museum Situs Kota China merupakan nama sebuah situs arkeologi yang terletak di tepi danau Siombak, Kelurahan Paya Pasir, Kecamatan Medan Marelan, Kota Medan. </p>
                <p align="justify">Situs Kota China di Medan Marelan telah diketahui sejak tahun 1970-an, namun jejak sejarahnya mulai terkuak sejak ditemukanya sebuah arca kuno tepatnya pada saat adanya penggalian tanah menggunakan alat berat untuk penimbunan pembangunan jalan Tol Belmera pada tahun 1986 silam. Kota China adalah kerajaan yang makmur dan terdapat bandar internasional yang dihuni para imigran asal Tiongkok. Pada umumnya, bangsa Tiongkok datang dengan latar belakang keinginan untuk mencari peruntungan hidup lebih baik dari tempat asalnya dengan melakukan bisnis perdagangan.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Kota Cina, Paya Pasir, Kec. Medan Marelan, Kota Medan, Sumatera Utara 20254</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>https://medantourism.pemkomedan.go.id</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak Tersedia</p>
                  </div>
                </div>
              </div>
            </div>
      </section>
  </div>
</section>


<!-- services section --> 
<!-- work section -->
<!-- overlay --> 
<!-- work section --> 
<!-- our team section -->
<!-- our team section --> 
<!-- Testimonials section -->
<!-- Testimonials section --> 
<!-- contact section -->
<!-- contact section --> 

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