<?php
include("koneksi.php");
$kode=$_POST['no'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$ukuran=$_POST['ukuran'];
$nohp=$_POST['nomerhp'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$input="insert into pembelian(kodeproduk, nama, alamat, nomerhp, jumlah, ukuran, email) values ('$kode', '$nama', '$alamat', '$nohp', '$jumlah', '$ukuran', '$email')";
if ($nama=="" or $jumlah=="" or $nohp=="" or $alamat==""){
echo '<script type="text/javascript">

var answer = alert("Data masih belum lengkap")

window.location = "produk_detail.php";

</script>';

}
else{
	$hasil=mysqli_query($conn, $input);
	if ($hasil){
		header('location:index.php?update=2');
	}
	else{
	echo '<script type="text/javascript">

	var answer = alert("Sudah ada user dengan username tersebut")
	window.location = "produk_detail.php";
	</script>';
	}
}
?>