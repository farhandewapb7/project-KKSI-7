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

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  <div id="preloder">
    <div class="loader"></div>
</div>
<?php
  include ('koneksi.php');
  $no = $_GET['id'];
?>

<div class="container">
  <div class="container text-center">
     <img src="Images/Logo.jpg">
  </div>
  <center><h3>Welcome to HanTok</h3></center>
<br><br>
  <div class="container">
  <div class="row">
    <?php
      $slider = mysqli_query($conn, "SELECT * FROM produk WHERE kodeproduk 
        = '$no'");
      while($row = mysqli_fetch_array($slider)){
    ?>

    <div class="col"><br><br><br><br><center>
    	<img src="file/<?php echo $row['gambar'] ?>" width="450" height="550"></Center>
    </div>
    <div class="col">
    	<br><br>    	<center><h3>Sweater Hodie</h3></center>
    	<br>
    	<?php echo $row['keterangan'] ?><br><br>
    	<p>Tersedia Dalam Ukuran:</p>
    		<p>L</p>
    		<p>M</p>
    		<p>XL</p>
    		<p>XXL</p>
    	
    	<br>
    	<br>
    	<br>
    	<tr>
       		<td>Harga</td><br><br> 
       		<td class="text-right"><?php echo $row['harga']?></td>
      </tr>
    	<br>
    	<br>
    	<br>
    	<tr>
			   <td width="92"><button class="btn btn-info" name="upload" type="button" data-toggle="modal" data-target="#exampleModal">Beli sekarang</button></td>
			   <td width="92"><a href="clothes.php" button class="btn btn-info" type="button">Back</a></td>
		  </tr>
    </div>
    <?php
      }
    ?>
  </div>

  <form method="post" action="beli.php"> 
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesan Sekarang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        $no = $_GET['id'];
        ?>
        <form>
          <div class="form-group">
            <input type="hidden" name="no" value="<?php echo $no; ?>">
       Nama
       <input name="nama" type="text" class="form-control" id="name" placeholder="Masukan Nama Disini">
       <br>
       Jumlah
       <input name="jumlah" type="number" class="form-control" id="name" placeholder="Masukan Jumlahnya">
       <br>
       ukuran
       <select class="form-control" name="ukuran">
         <option>M</option>
         <option>L</option>
         <option>XL</option>
         <option>XXL</option>
       </select>
       <br>
       Nomer HP
       <input name="nomerhp" type="text" class="form-control" id="name" placeholder="+62">
       <br>
       Email
       <input name="email" type="text" class="form-control" id="name" placeholder="Masukan Email Disini">
       <br>
       Alamat
       <textarea name="alamat" rows="5" class="form-control" id="message" placeholder="Masukan Alamat Disini" ></textarea>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</form>

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