<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HANTOK</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="icon" type="image/icon" href="Images/Logo.jpg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/sunshine/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/sunshine/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/sunshine/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/sunshine/css/themify-icons.css">
    <link rel="stylesheet" href="assets/sunshine/css/nice-select.css">
    <link rel="stylesheet" href="assets/sunshine/css/flaticon.css">
    <link rel="stylesheet" href="assets/sunshine/css/animate.css">
    <link rel="stylesheet" href="assets/sunshine/css/slicknav.css">
    <link rel="stylesheet" href="assets/sunshine/css/style.css">
    <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/flaticon.css"/>
    <link rel="stylesheet" href="assets/divisima/css/slicknav.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/animate.css"/>
    <link rel="stylesheet" href="assets/divisima/css/style.css"/>

      <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>
  <link rel="stylesheet" href="assets/divisima/css/style.css"/>
  <script src="assets/divisima/js/jquery-3.2.1.min.js"></script>
  <script src="assets/divisima/js/bootstrap.min.js"></script>
  <script src="assets/divisima/js/main.js"></script>

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<div id="preloder">
  <div class="loader"></div>
</div>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

   <!-- header-->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo-img">
                            <a href="index.php">
                                <h4>HANTOK</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">home</a></li>
                                    <li><a href="profil.php">profil</a></li>
                                    <li><a class="active" href="clothes.php">clothes</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

  <div class="container text-center">
     <img src="Images/Logo.jpg">
    <h1>TOKO HanTok</h1>      
    <p>Sweather</p>
  </div>
</div>

<center><h2>Terbaru</h2></center>
    <?php
  include ('koneksi.php');
    $slider = mysqli_query($conn, "SELECT * FROM produk WHERE kategori ='Terbaru' ORDER BY kodeproduk DESC");
    ?>
<div class="container">
<div class="row">
    <?php
    $no = 0;
    while($row = mysqli_fetch_array($slider)){
    ?>
    <div class="col-sm-3">
      <div class="section-title" style="width:253  height:253">
        <img src="file/<?php echo $row['gambar']?>" class="card-img-top">
          <div class="add-card" style="width:253  height:253">
              <h5 class="card-title"><?php echo $row['nama_sweater']?></h5>
              <p class="card-text"><?php echo substr( $row['keterangan'],0,15)?></p>
              <p class="card-text"><?php echo $row['harga']?></p>
              <a href="produk_detail.php?id=<?php echo $row['kodeproduk'];?>" class="btn btn-danger">Pesan Sekarang</a>
          </div>

      </div>
    </div>
        <?php
    $no++;
      }
    ?>
</div>
</div><br><br>

<center><h2>Terlaris</h2></center>
    <?php
  include ('koneksi.php');
    $slider = mysqli_query($conn, "SELECT * FROM produk WHERE kategori ='Terlaris' ORDER BY kodeproduk DESC");
    ?>
<div class="container">
<div class="row">
    <?php
    $no = 0;
    while($row = mysqli_fetch_array($slider)){
    ?>
    <div class="col-sm-3">
      <div class="section-title" style="width:253  height:253">
        <img src="file/<?php echo $row['gambar']?>" class="card-img-top">
          <div class="add-card" style="width:253  height:253">
              <h5 class="card-title"><?php echo $row['nama_sweater']?></h5>
              <p class="card-text"><?php echo substr( $row['keterangan'],0,15)?></p>
              <p class="card-text"><?php echo $row['harga']?></p>
              <a href="produk_detail.php?id=<?php echo $row['kodeproduk'];?>" class="btn btn-primary">Pesan Sekarang</a>
          </div>

      </div>
    </div>
        <?php
    $no++;
      }
    ?>
</div>
</div><br><br>

<center><h2>Terkeren</h2></center>
    <?php
  include ('koneksi.php');
    $slider = mysqli_query($conn, "SELECT * FROM produk WHERE kategori ='Terkeren' ORDER BY kodeproduk DESC");
    ?>
<div class="container">
<div class="row">
    <?php
    $no = 0;
    while($row = mysqli_fetch_array($slider)){
    ?>
    <div class="col-sm-3">
      <div class="section-title" style="width:253  height:253">
        <img src="file/<?php echo $row['gambar']?>" class="card-img-top">
          <div class="add-card" style="width:253  height:253">
              <h5 class="card-title"><?php echo $row['nama_sweater']?></h5>
              <p class="card-text"><?php echo substr( $row['keterangan'],0,15)?></p>
              <p class="card-text"><?php echo $row['harga']?></p>
              <a href="produk_detail.php?id=<?php echo $row['kodeproduk'];?>" class="btn btn-primary">Pesan Sekarang</a>
          </div>

      </div>
    </div>
        <?php
    $no++;
      }
    ?>
</div>
</div><br><br>

    <center>
        <section class="footer-section">
        <div class="social-links-warp">
                <div class="social-links">
                    <a href="https://www.instagram.com/darussa_adah/" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a href="https://www.facebook.com/darussaadah.bogor/" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    <a href="https://www.youtube.com/channel/UCk-dPqy4rV3EnkYONoVAMRg/videos" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                </div>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5"> &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/darussa_adah/" target="_blank">DARSAED</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </div>
      </section>
    </center>
    <!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->
        <script src="assets/divisima/js/jquery-3.2.1.min.js"></script>
        <script src="assets/divisima/js/bootstrap.min.js"></script>
        <script src="assets/divisima/js/jquery.slicknav.min.js"></script>
        <script src="assets/divisima/js/owl.carousel.min.js"></script>
        <script src="assets/divisima/js/jquery.nicescroll.min.js"></script>
        <script src="assets/divisima/js/jquery.zoom.min.js"></script>
        <script src="assets/divisima/js/jquery-ui.min.js"></script>
        <script src="assets/divisima/js/main.js"></script>

        <script src="assets/sunshine/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/sunshine/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/sunshine/js/popper.min.js"></script>
        <script src="assets/sunshine/js/bootstrap.min.js"></script>
        <script src="assets/sunshine/js/owl.carousel.min.js"></script>
        <script src="assets/sunshine/js/isotope.pkgd.min.js"></script>
        <script src="assets/sunshine/js/ajax-form.js"></script>
        <script src="assets/sunshine/js/waypoints.min.js"></script>
        <script src="assets/sunshine/js/jquery.counterup.min.js"></script>
        <script src="assets/sunshine/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/sunshine/js/scrollIt.js"></script>
        <script src="assets/sunshine/js/jquery.scrollUp.min.js"></script>
        <script src="assets/sunshine/js/wow.min.js"></script>
        <script src="assets/sunshine/js/nice-select.min.js"></script>
        <script src="assets/sunshine/js/jquery.slicknav.min.js"></script>
        <script src="assets/sunshine/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/sunshine/js/plugins.js"></script>
    
        <!--contact js-->
        <script src="assets/sunshine/js/contact.js"></script>
        <script src="assets/sunshine/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/sunshine/js/jquery.form.js"></script>
        <script src="assets/sunshine/js/jquery.validate.min.js"></script>
        <script src="assets/sunshine/js/mail-script.js"></script>
    
        <script src="assets/sunshine/js/main.js"></script>
</body>