<header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">ADMINISTRATOR WEB</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>
              <!--
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li>
              -->
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="penilaian.php">Penilaian</a></li>
          <li><a href="pilihtitik.php">Proses SAW</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <!--<li><a href="testimonial.php">Testimonial</a></li>-->
          <!--<li><a href="tentang.php">Tentang Kami</a></li>-->
           <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
</header>