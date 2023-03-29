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

  $id_titikawal = $_POST['id_titikawal'];
  include "koneksi.php";
  mysql_connect('localhost', 'root', '');
  mysql_select_db('wisata_db');

  /*
  $sqlx = "SELECT * FROM q_penilaian2 where id_titikawal='".$id_titikawal."' order by id_lokasi asc";
  $queryx = mysql_query($sqlx);
  while ($resultx = mysql_fetch_array($queryx)){
    echo $resultx['id_lokasi'];
    //$idlokasi = $resultx['id_lokasi'];
    //$idlokasi= 22;
    mysqli_query($connect,"INSERT INTO temp_proses VALUES ('".$resultx['id_lokasi']."',0,2,3,4,5,7)");
  }*/
  
  
  $query = "SELECT * FROM q_penilaian2 where id_titikawal='".$id_titikawal."' order by id_lokasi ASC"; 
  $sql = mysqli_query($connect, $query); 
  while($data = mysqli_fetch_array($sql)){
      
      if ($data['jarak']>15) {
        $nk1=5;
      }elseif ($data['jarak']>10) {
        $nk1=4;
      }elseif ($data['jarak']>5) {
        $nk1=3;
      }elseif ($data['jarak']>1) {
        $nk1=2;
      }else{
        $nk1=1;
      }

      if ($data['harga']>20000) {
        $nk2=5;
      }elseif ($data['harga']>15000) {
        $nk2=4;
      }elseif ($data['harga']>10000) {
        $nk2=3;
      }elseif ($data['harga']>=5000) {
        $nk2=2;
      }else{
        $nk2=1;
      }

      if ($data['fasilitas']>10) {
        $nk3=5;
      }elseif ($data['fasilitas']>=9) {
        $nk3=4;
      }elseif ($data['fasilitas']>=6) {
        $nk3=3;
      }elseif ($data['fasilitas']>=4) {
        $nk3=2;
      }else{
        $nk3=1;
      }

      /*
      if ($data['mobilitas']>13) {
        $nk4=5;
      }elseif ($data['mobilitas']>=10) {
        $nk4=4;
      }elseif ($data['mobilitas']>=6) {
        $nk4=3;
      }elseif ($data['mobilitas']>=3) {
        $nk4=2;
      }else{
        $nk4=1;
      }
      */
      $nk4=$data['mobilitas'];

      //$qry = "INSERT INTO temp_proses VALUES('".$data['id_lokasi']."','".$data['lokasi']."', 1,2,3,4,5,'".$data['id_titikawal']."')";
      //$sqlsimpan = mysqli_query($connect, $qry);
      mysqli_query($connect,"INSERT INTO temp_proses VALUES ('".$data['id_lokasi']."','".$data['lokasi']."','".$nk1."','".$nk2."','".$nk3."','".$nk4."','".$data['id_titikawal']."')");
  }  
?>
 
<!doctype html>
<html class="no-js" lang="">
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
    <h6 align="center">Hasil Konversi Nilai Kriteria Pada Setiap Lokasi Wisata</h6>
  </section> 
<!-- Artikel section --> 
<!-- Article Data Control -->
<br>
<br>            
            <table border="1" width="90%" align="center">
                  <tr>                    
                    <td align=center><strong>Lokasi</strong></td>
                    <td align=center><strong>Nilai Jarak </strong></td>
                    <td align=center><strong>Nilai Harga</strong></td>
                    <td align=center><strong>Nilai Fasilitas</strong></td>
                    <td align=center><strong>Nilai Rating</strong></td>
                  </tr>
              <?php
                $query2 = "SELECT * FROM temp_proses order by id_lokasi ASC"; 
                $sql2 = mysqli_query($connect, $query2); 
              while($data2 = mysqli_fetch_array($sql2)){ 
                    echo "<tr>";
                    echo "<td align='center'>".$data2['lokasi']."</td>";
                    echo "<td align='center'>".$data2['jarak']."</td>";
                    echo "<td align='center'>".$data2['harga']."</td>";
                    echo "<td align='center'>".$data2['fasilitas']."</td>";
                    echo "<td align='center'>".$data2['mobilitas']."</td>";                    
                    echo "</tr>";
                }
              ?>
            </table>
            <br></br>

            <h6 align="center">Hasil Perhitungan Metode SAW</h6>
            <table border="1" width="90%" align="center">
                  <tr>                    
                    <td align=center><strong>Kode Lokasi</strong></td>
                    <td align=center><strong>Nama Lokasi </strong></td>
                    <td align=center><strong>Nilai Akhir</strong></td>
                    <td align=center><strong>Rangking</strong></td>
                  </tr>
              <?php
                $query2 = "SELECT * FROM view4 order by total DESC"; 
                $sql2 = mysqli_query($connect, $query2); 
                $nomor=1;
              while($data2 = mysqli_fetch_array($sql2)){ 
                    echo "<tr>";
                    echo "<td align='center'>".$data2['id_lokasi']."</td>";
                    echo "<td align='center'>".$data2['lokasi']."</td>";
                    $nilai=round($data2['total'],3);
                    echo "<td align='center'>".$nilai."</td>";
                    echo "<td align='center'>Rangking ".$nomor."</td>";
                    echo "</tr>";
                    $nomor++;
                }
              ?>
            </table>
            <br></br>

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