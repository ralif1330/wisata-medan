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
      <h6>WISATA SEJARAH</h6>
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
                          <img src="images/foto/sejarah/maimun1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/maimun2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/maimun3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Istana Maimun</h2>
                <p align="justify">Istana Maimun adalah istana Kesultanan Deli yang merupakan salah satu ikon Kota Medan, Sumatra Utara. Istana ini terletak di Jalan Brigadir Jenderal Katamso, Aur, Medan Maimun. Istana Maimun didesain oleh arsitek Capt. Theodoor van Erp, seorang tentara Kerajaan Belanda yang dibangun atas perintah Sultan Deli, Sultan Ma'moen Al Rasyid. Pembangunan istana ini dimulai dari 26 Agustus 1888 dan selesai pada 18 Mei 1891. Istana Maimun memiliki luas sebesar 2.772 m2 dan 30 ruangan</p>
                <p align="justify">Istana Maimun menjadi tujuan wisata bukan hanya karena usianya yang tua, tetapi juga desain interiornya yang unik, memadukan unsur-unsur warisan kebudayaan Melayu Deli, dengan gaya Islam, Spanyol, India, Belanda dan Italia.</p>
                <br>
            </div>
      </div>
      <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Brigjend Katamso No.66, A U R, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20151</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>https://medantourism.pemkomedan.go.id</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(061) 74588266</p>
                  </div>
                </div>
              </div>
            </div>
      </section>
    </div>
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
                          <img src="images/foto/sejarah/mesjid1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/mesjid2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/mesjid3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Mesjid Raya Medan</h2>
                <p align="justify">Masjid Raya Medan atau Masjid Raya Al Mashun merupakan sebuah masjid yang terletak di Medan, Indonesia. Masjid ini dibangun pada tahun 1906 dan selesai pada tahun 1909. Pada awal pendiriannya, masjid ini menyatu dengan kompleks istana. Gaya arsitekturnya khas Timur Tengah, India dan Spanyol. Masjid ini berbentuk segi delapan dan memiliki sayap di bagian selatan, timur, utara dan barat. Masjid Raya Medan ini merupakan saksi sejarah kehebatan Suku Melayu sang pemilik dari Kesultanan Deli (Kota Medan).</p>
                <br>
            </div>
      </div>
      <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Mahkamah No.74c, RT.02, Mesjid, Kec. Medan Kota, Kota Medan, Sumatera Utara 20212</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>http://disbudpar.sumutprov.go.id/objek_wisata/mesjid-raya-medan/</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(061) 7626112</p>
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
                          <img src="images/foto/sejarah/museum1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/museum2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/museum3.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Museum Tjong A Fie Mansion</h2>
                <p align="justify">Tjong A Fie Mansion atau Rumah Tjong A Fie kerap direkomendasikan sebagai salah satu tujuan wisata saat berkunjung ke Medan. Lokasi Tjong A Fie Mansion ada di Jalan Ahmad Yani No.105, di Kesawan, Medan, Sumatera Utara.</p>
                <p align="justify">Tjong A Fie Mansion menetapkan tiket masuk dan jam kunjungan seperti museum pada umumnya. Harga tiket Tjong A Fie Mansion cukup terjangkau oleh wisatawan yaitu Rp 35.000 per orang. Sementara jam buka Tjong A Fie Mansion setiap hari adalah mulai pukul 09.00 - 17.00 WIB.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Jend. Ahmad Yani No.105, Kesawan, Kec. Medan Bar., Kota Medan, Sumatera Utara 20111</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>https://tjongafiemansion.org/</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>08116130388</p>
                  </div>
                </div>
              </div>
            </div>
      </section>
  </div>
</section>


<!-- services section --> 

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