<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$pesan=$_POST['pesan'];
$input="insert into pesan(nama, email, subject, pesan) values ('$nama', '$email', '$subject', '$pesan')";
if ($nama=="" or $email=="" or $subject=="" or $pesan==""){
echo '<script type="text/javascript">

var answer = alert("Kalo Kirim Pesan Yang Bener dong Bang")

window.location = "contact.php";

</script>';

}
else{
	$hasil=mysqli_query($conn, $input);
	if ($hasil){
		header('location:contact.php?update=2');
	}
	else{
	echo '<script type="text/javascript">

	var answer = alert("Maaf ni bukannya ngga bisa tapi emang udah ada")
	window.location = "contact.php";
	</script>';
	}
}
?>