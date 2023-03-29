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
      <h6>WISATA ALAM</h6>
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
                          <img src="images/foto/alam/siombak1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/siombak.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/siombak3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Danau Siombak</h2>
                <p align="justify">Danau Siombak adalah sebuah danau buatan dengan luas sekitar 40 hektare, Diameter sekitar 1000 meter,dan kedalaman kurang lebih 12 meter. Danau ini terletak di Kelurahan Paya Pasir, Medan Marelan, Medan, Sumatra Utara. Danau Siombak terletak di antara dua sungai, yaitu Sungai Deli dan Sungai Terjun. Danau ini merupakan bekas galian untuk pembangunan proyek tol belmera pada tahun 1980.</p>
                <br>
            </div>
      </div>
      <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Ps. Nippon No.Ujung, Paya Pasir, Kec. Medan Marelan, Kota Medan, Sumatera Utara 20252</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>08126326301</p>
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
                          <img src="images/foto/alam/sicanang1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/sicanang2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/sicanang3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Mangrove Sicanang</h2>
                <p align="justify">Pohon mangrove bagi sebagian orang mungkin sudah tak asing lagi, khususnya mereka yang tinggal di kawasan pesisir. Pohon mangrove bisa hidup dalam lingkungan berkadar garam tinggi. Cirinya ditandai dengan akarnya yang muncul ke permukaan. Di Sicanang, hutan mangrove dijadikan sebagai hutan wisata. Hutan yang terawat rapi dan bersih menarik perhatian para wisatawan untuk berkunjung.</p>
                <p align="justify">Pada Senin-Jumat, jumlah kunjungan tidak terlalu ramai. Jumlah ini meningkat di Sabtu-Minggu dan hari libur.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Pulau Sicanang, Belawan, Medan Belawan, Sumatera Utara 20414</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak Tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>0823-2905-5550</p>
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
                          <img src="images/foto/alam/buaya1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/buaya2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/buaya3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Taman Buaya Asam Kumbang</h2>
                <p align="justify">Taman Buaya Asam Kumbang atau Taman Buaya Medan merupakan objek wisata legendaris di Kota Medan, Sumatera Utara. Taman buaya yang berlokasi di Jalan Bunga Raya II, Kelurahan Asam Kumbang, Kecamatan Medan Selayang, ini sudah berdiri selama 60 tahun atau sejak 1959.</p>
                <p></p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Bunga Raya II No.8, Asam Kumbang, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20128</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>061-8211134</p>
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