<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$kode_section = $_POST['kode_section'];
$no_licensi = $_POST['no_licensi'];
$join_date = $_POST['join_date'];
$start_date = $_POST['start_date'];
$exp_date = $_POST['exp_date'];
 
// menginput data ke database
mysqli_query($db,"insert into renewal values('','$NIK','$nama','$kode_section','$no_licensi','$join_date','$start_date','$exp_date')");
 
// mengalihkan halaman kembali ke index.php
header("location:renewal.php");
 
?>
