<html class="no-js" lang="zxx">

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
  <link rel="stylesheet" href="assets/divisima/css/style.css"/>
  <script src="assets/divisima/js/jquery-3.2.1.min.js"></script>
  <script src="assets/divisima/js/bootstrap.min.js"></script>
  <script src="assets/divisima/js/main.js"></script>

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body background="images/background1.jpg">
<div id="preloder">
  <div class="loader"></div>
</div>
<?php
include("koneksi.php");
?>
<center><h2 style="color:pink">UPLOAD SWEATER</h2></center>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
		<form action="tambah_produk2.php" method="post" enctype="multipart/form-data">
			<table width="319" border="0" class="table table-info">
        <tr>
          <td width="152" style="color:hotpink">Kode sweater</td>
          <td style="color:hotpink">:</td>
          <td width="157"><input name="kode" type="text" class="form-control" id="kode" size="20" /></td>
        </tr>
				<tr>
					<td width="152" style="color:hotpink">Nama sweater</td>
          <td style="color:hotpink">:</td>
					<td width="157"><input name="barang" type="text" class="form-control" id="barang" size="20" /></td>
				</tr>
        <tr>
          <td width="152" style="color:hotpink">Harga</td>
          <td style="color:hotpink">:</td>
          <td width="157"><input name="harga" type="text" class="form-control" id="harga" size="20" /></td>
        </tr>
        <tr>
          <td width="152" style="color:hotpink">Keterangan</td>
          <td style="color:hotpink">:</td>
          <td width="157"><input name="keterangan" type="text" class="form-control" id="keterangan" size="20" /></td>
        </tr>
        <tr>
          <td width="152" style="color:hotpink">Kategori</td>
          <td style="color:hotpink">:</td>
          <td width="157"><input name="kategori" type="text" class="form-control" id="kategori" size="20" /></td>
        </tr>
        <tr>
          <td width="152" style="color:hotpink">Gambar</td>
          <td style="color:hotpink">:</td>
          <td width="157"><input name="file" type="file" size="20" /></td>
        </tr>
				<tr>
					<td width="92"><input class="btn btn-info" name="upload" type="submit"></a></input></td>
					<td width="92"><a href="index.php" button class="btn btn-info" type="button">Batal</a></button></td>
				</tr>
			</table>
<br>
		</form>

	</div>
	</div>
</div>
  



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