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
  background-color: gray;
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
  <h6 align="center">Tambah Foto Galeri</h6>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
    <!--
    <table cellpadding="20" align="center">
      <tr>
        <td>Jenis Wisata</td>
        <td>
        <input type="radio" name="jenis_wisata" value="Wisata Alam"> Wisata Alam
        <input type="radio" name="jenis_wisata" value="Wisata Sejarah"> Wisata Sejarah
        <input type="radio" name="jenis_wisata" value="Wisata Pendidikan"> Wisata Pendidikan
        </td>
      </tr>
      <tr>
        <td>Nama Tempat Wisata</td>
        <td><input type="text" name="nama_tempat"></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td><input type="file" name="foto"></td>
      </tr>
      <td><input type="submit" value="Simpan"></td>
      <td><a href="galeri.php"><input type="button" value="Batal"></a></td>
    </table>
    -->

    <div class="container h-100">
      <div class="col-md-12">
        <div class="form-group">            
            <label>Jenis Wisata</label>
            <br>
              <input type="radio" name="jenis_wisata" value="Wisata Alam"> Wisata Alam
              <input type="radio" name="jenis_wisata" value="Wisata Sejarah"> Wisata Sejarah
              <input type="radio" name="jenis_wisata" value="Wisata Pendidikan"> Wisata Pendidikan
            <br><br>
            <label>Nama Tempat Wisata</label>
                <input class="form-control" type="text" name="nama_tempat" id="nama_tempat" required>
            <br>
            <label>Foto Galeri &nbsp; &nbsp; </label>                
                <input type="file" name="foto">
            <label></label>
            <br><br>
          <button class="btn btn-block btn-info" value="Simpan" type="submit" >Simpan Data</button>
        </div>
      </div>
    </div>

  </form>

  <br><br>
</section>  
  
</body>
</head>
</html>