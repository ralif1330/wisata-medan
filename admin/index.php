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

  <style>
  .btn {
    background-color: gray;
    color: #FA4;
    font-size: 13px;
    font-weight: 600;
    border: 0;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    display: inline-block;
    text-transform: uppercase;
    opacity:0.8;
  }
  </style>
</head>

<body>
<!-- header  -->
<section class="banner" role="banner">

  <?php include "nav.php"; ?>
  
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <p><a class="navbar-brand"><img src="../images/banner.png" class="img-responsive" style="width: 1400px; margin-top: -130px;"></a></p>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header  --> 
<!-- intro  -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>SELAMAT DATANG</h3>
      <p>Sebuah website yang menyajikan objek - objek wisata sekitar Kota Medan yang cocok bagi Anda yang bingung mencari tempat wisata di sekitar Kota Medan</p>    </div>
  </div>
</section>
<!-- intro  --> 
<!-- services  -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!--Satu-->
                <iframe width="750" height="400" src="https://www.youtube.com/embed/BmqPla7UiyU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p><h4>Istana Maimum Kota Medan, Sumatera Utara </h4></p>
                <p class="justify">Istana Maimun didirikan oleh Sultan Maimun Al Rasyid Perkasa Alamsyah, yang merupakan keturunan raja ke-sembilan Kesultanan Deli. Istana ini memadukan ornamen budaya banyak negara. Ada nuansa melayu, Islam, Spanyol, China,  India, dan Italia. Nuansa melayu ditandai dengan warna kuning keemasan. </p>
                <br>
                <br>
                <br>

                <!--Dua-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/GBPWCe2Iu80" frameborder="0" allowfullscreen></iframe>
                <p><h4>Keraton Yogyakarta</h4></p>
                <p class="justify">Kraton Yogyakarta terbuka untuk kunjungan wisatawan setiap hari mulai pukul 09.00 – 14.00 WIB. Khusus hari Jumat kraton tutup pukul 11.00 WIB. Tiket masuk sebesar Rp 5.000 (wisatawan domestik) dan Rp 15.000 (wisatawan asing). Kompleks Kraton Yogyakarta memiliki 2 loket masuk, yang pertama terletak di Tepas Keprajuritan (depan Alun-alun Utara) dan di Tepas Pariwisata (Regol Keben). Jika ingin melihat koleksi yang lebih lengkap disarankan untuk masuk melalui Tepas Pariwisata.</p>
                <br>
                <br>
                <br>

                <!--Tiga-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/rZ9MifQ-7fM" frameborder="0" allowfullscreen></iframe>
                <p><h4>Goa Pindul</h4></p>
                <p class="justify">Gua Pindul adalah objek wisata berupa gua yang terletak di Desa Bejiharjo, Kecamatan Karangmojo, Kabupaten Gunungkidul. Gua Pindul dikenal karena cara menyusuri gua yang dilakukan dengan menaiki ban pelampung di atas aliran sungai bawah tanah di dalam gua, kegiatan ini dikenal dengan istilah cave tubing.</p>
                <br>
                <br>
                <br>

                <!--Empat-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/77-bksIkkBE" frameborder="0" allowfullscreen></iframe>
                <p><h4>Pantai Siung</h4></p>
                <p class="justify">Pantai Siung terletak di Kecamatan Tepus, Dusun Wates, Desa Purwodadi, Kecamatan Tepus, Kabupaten Gunung Kidul, provinsi Daerah Istimewa Yogyakarta. Sekitar 77 km dari kota Yogyakarta.</p>
                <br>
                <br>
                <br>

                <!--Lima-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/Fu82VBHsf_o" frameborder="0" allowfullscreen></iframe>
                <p><h4>Jalan Malioboro</h4></p>
                <p class="justify">elama di Jalan Malioboro, Anda hampir selalu bisa mendengarkan alunan gamelan Jawa yang diputar dari kaset maupun dimainkan secara langsung oleh seniman jalanan Yogyakarta. Tak hanya di siang hari, tempat wisata ini pun ramai di malam hari. Budaya lesehan dan angkringan tak bisa terlepaskan dari kota cantik ini.</p>
                <p>Sampai sekarang, Jalan Malioboro masih menjadi bagian penting dari Keraton Yogyakarta. Jalan ini selalu menjadi lokasi kirab setiap kali keraton mengadakan sebuah acara dan perayaan tertentu.</p>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well 
                <div class="well">
                    <h4>Pencarian</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>                
                <!-- /.input-group -->

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategori Destinasi Wisata</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Wisata Alam</a>
                                </li>
                                <li><a href="#">Wisata Sejarah</a>
                                </li>
                                <li><a href="#">Wisata Pendidikan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Wisata di Kota Medan</h4>
              <section>
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides"> 
                      <li>    
                          <img href="wisataalam.php" src="../images/foto/alam/pic1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.php" src="../images/foto/alam/pic2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.php" src="../images/foto/alam/pic3.png" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
                </div>
            <p id="demo"></p>
              <script>
                  document.getElementById("demo").innerHTML = Date();
              </script>
                <section id="services" class="services service-section">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h6 align="center" style="color:black">Mengapa memilih website wisata medan ?</h6>
        <section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-global" style="color:green"></span>
        <div class="services-content">
          <h5>Terlengkap dan terupdate</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart" style="color:#F60"></span>
        <div class="services-content">
          <h5>Informasi terpercaya</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-paperclip" style="color:blue"></span>
        <div class="services-content">
          <h5>Testimonial Pengunjung</h5>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
</section>

<!-- Footer  -->
<?php include "footer.php"; ?>
<!-- footer --> 
  
<!-- Footer --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flexslider-min.js"></script> 
<script src="../js/jquery.fancybox.pack.js"></script> 
<script src="../js/retina.min.js"></script> 
<script src="../js/modernizr.js"></script> 
<script src="../js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>