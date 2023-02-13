<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$NIK = $_GET['NIK'];
 
 
// menghapus data dari database
mysqli_query($db,"delete from pegawai where NIK='$NIK'");
 
//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

// mengalihkan halaman kembali ke index.php
header("location:datapegawai.php");
 
?>