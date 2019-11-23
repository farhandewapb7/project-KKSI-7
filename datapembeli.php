<!DOCTYPE html>
<html>
<head>
  <title>Data Pembeli | HanTok</title>

<link rel="icon" type="image/icon" href="Images/logo.jpg">
  <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>
  <link rel="stylesheet" href="assets/divisima/css/style.css"/>
  <script src="assets/divisima/js/jquery-3.2.1.main.js"></script>
  <script src="assets/divisima/js/bootstrap.min.js"></script>
  <script src="assets/divisima/js/main.js"></script>

    <link rel="stylesheet" href="assets/sunshine/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/sunshine/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/sunshine/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/sunshine/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/sunshine/css/themify-icons.css">
    <link rel="stylesheet" href="assets/sunshine/css/nice-select.css">
    <link rel="stylesheet" href="assets/sunshine/css/flaticon.css">
    <link rel="stylesheet" href="assets/sunshine/css/flaticon.css">
    <link rel="stylesheet" href="assets/sunshine/css/gijgo.css">
    <link rel="stylesheet" href="assets/sunshine/css/slicknav.css">
    <link rel="stylesheet" href="assets/sunshine/css/style.css">
</head>
<body background="images/logo.jpg">
  <?php
include("koneksi.php");
?>
<div class="container"><center><div class="alert alert-dark" role="alert"><h1>DATA PEMBELI HANTOK</h1></center>
<?php if (!empty($_GET['update'])){
if ($_GET['update']==1)
echo "<p class='message'> <h4>Data siswa berhasil diupdate</h4></p>";

else if ($_GET['update']==2)
echo "<p class='message'> <h4>Data siswa berhasil ditambahkan</h4></p>";

else if ($_GET['update']==3)
echo "<p class='message'> <h4>Data siswa berhasil dihapus</h4></p>";
}
?>
<?php
$no=1;
$sqlCount = "select count(kodeproduk) from pembelian";
$query = mysqli_query($conn, $sqlCount) or die(mysqli_error($conn));
$rsCount = mysqli_fetch_array($query);
$banyakData = $rsCount[0];
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;
$mulai_dari = $limit * ($page - 1);
$sql_limit = "select * from pembelian order by kodeproduk limit

$mulai_dari, $limit";

$hasil = mysqli_query($conn, $sql_limit) or die(mysqli_error($conn));
if(mysqli_num_rows($hasil)==0){
echo "<p class='message'>Data tidak ditemukan!</p>";
}
?>
<table class="table table-striped table-dark">
<thead>
<tr class="success">
<td>Kode_Produk</td>
<td>Nama</td>
<td>alamat</td>
<td>NoHP</td>
<td>Ukuran</td>
<td>jumlah</td>
<td>email</td>
</tr>
</thead>
<tbody>
<?php $no=$no+(($page-1)*$limit);
//Buang field ke dalam array
while ($data=mysqli_fetch_array($hasil)){
?>
<tr class="success">
<td><?php echo $data[1]; ?></td>
<td><?php echo $data[2]; ?></td>
<td><?php echo $data[3]; ?></td>
<td><?php echo $data[4]; ?></td>
<td><?php echo $data[0]; ?></td>
<td><?php echo $data[5]; ?></td>
<td><?php echo $data[6]; ?></td>
<td>
</td>
</tr>
<?php $no++;
}?>
</tbody>
</table>
<?php {}?>
<div class="pagination pagination-right">
<?php
$banyakHalaman = ceil($banyakData / $limit);
echo 'Page ';
for($i = 1; $i <= $banyakHalaman; $i++){
if($page != $i){
echo '<a href="data_siswa.php?page='.$i.'">'.$i.'

</a> ';

}else{
echo "$i ";
}
}
?>
</div>
</div>
</div>
</body>
</html>