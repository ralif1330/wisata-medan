<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WISATA</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/jquery.fancybox.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="../images/i.png">
<style>
.intro {
  background-color: black;
}
.btn {
  background-color: green;
  color: white;
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
<section  class="section intro">
  <h6 align="center">Ubah Data Penilaian Lokasi Wisata</h6>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data id yang dikirim oleh artikel.php melalui URL
  $id = isset($_GET['id'])?$_GET['id']:"";
  
  // Query untuk menampilkan data  berdasarkan id yang dikirim
  $query = "SELECT * FROM q_penilaian2 WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah_penilaian.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
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
                    <option value="<?php echo $data['id_lokasi']; ?>"><?php echo $data['lokasi']; ?></option>
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
                    <option value="<?php echo $data['id_titikawal']; ?>"><?php echo $data['awal_lokasi']; ?></option>
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
                  <input class="form-control" type="text" name="jarak" id="jarak" value="<?php echo $data['jarak']; ?>" required>
                <label>Harga</label>
                    <input class="form-control" type="text" name="harga" id="harga" value="<?php echo $data['harga']; ?>" required>
                <label>Fasilitas</label>
                    <input class="form-control" type="text" name="fasilitas" id="fasilitas" value="<?php echo $data['fasilitas']; ?>" required>
                <label>Rating</label>
                    <input class="form-control" type="text" name="mobilitas" id="mobilitas" value="<?php echo $data['mobilitas']; ?>" required>
                <label>&nbsp;</label>
              <button class="btn btn-block btn-info" name="insert_data" type="submit" >Simpan Data</button>
            </div>
          </div>
        </div>

  </form>
  <br>
  <br>
  </section>
</body>
</html>