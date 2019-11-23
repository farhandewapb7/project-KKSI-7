<?php
include ("koneksi.php");
if($_POST['upload']){
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $nama =$_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $kode = $_POST['kode'];
    $barang =$_POST['barang'];
    $harga =$_POST['harga'];
    $keterangan =$_POST['keterangan'];
    $kategori =$_POST['kategori'];

    if(in_array($ekstensi,$ekstensi_diperbolehkan) === true ){
    	if($ukuran < 104407031234444){
    		move_uploaded_file($file_tmp,'file/'.$nama);
    		$query = mysqli_query($conn,"INSERT into produk(kodeproduk,nama_sweater,harga,keterangan,kategori,gambar) values('$kode','$barang','$harga','$keterangan','$kategori','$nama')");
    		if($query){
    			echo 'GAMBAR BERHASIL DIUPLOAD';
    			header('location:pakaian.php');
    		}else{
    			echo 'GAGAL MENGUPLOAD GAMBAR';
    		}

    	}else{
    		echo 'UKURAN FILE TERLALU BESAR';

    	}
  }
    else{
    	echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN';
  }
}
?>