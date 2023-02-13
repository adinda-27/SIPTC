<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($db,"delete from penghargaan where id='$id'");
 
//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

// mengalihkan halaman kembali ke index.php
header("location:datapenghargaan.php");
 
?>