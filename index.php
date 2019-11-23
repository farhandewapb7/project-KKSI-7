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
                                    <li><a class="active" href="index.php">home</a></li>
                                    <li><a href="profil.php">profil</a></li>
                                    <li><a href="clothes.php">clothes</a></li>
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


<div class="container">
  <div class="container text-center">
     <img src="Images/Logo.jpg">
    <h1>TOKO HanTok</h1>      
    <p>Farhan Yulianto</p>
  </div>
</div>


<div class="container">
<div class="bd-example">
  <?php
  include ('koneksi.php');
    $slider = mysqli_query($conn, "SELECT * FROM produk WHERE kategori ='Terbaru' ORDER BY kodeproduk DESC");

  ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
    $no = 0;
    for($no;$no<3;$no++){
    ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $no ?>" class="<?php if($no == 0){echo 'active';}else{echo 'notactive';}?>"></li>
    <?php
      }
    ?>
  </ol>
  <div class="carousel-inner">
    <?php
    $no = 0;
    while($row = mysqli_fetch_array($slider)){
    ?>
    <div class="carousel-item <?php if($no == 0){echo 'active';}else{echo 'notactive';}?>">
      <img src="file/<?php echo $row['gambar']?>" class="d-block w-100" alt="...">
    </div>
    <?php
    $no++;
      }
    ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div><div class="jumbotron jumbotron-fluid">
    <center><h1 class="display-4">Mampir Dlu Bro</h1></center>
  </div>
</div>
<center>
        <section class="footer-section">
        <div class="social-links-warp">
                <div class="social-links">
                    <a href="https://www.instagram.com/darussa_adah/" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a href="https://www.facebook.com/darussaadah.bogor/" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    <a href="https://www.youtube.com/channel/UCk-dPqy4rV3EnkYONoVAMRg/videos" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                </div>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5"> &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/FarhanYulianto13/" target="_blank">FARHAN</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </div>
        </div>
    </section>
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

</html>