<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$no_licensi = $_POST['no_licensi'];
$nama_licensi = $_POST['nama_licensi'];
$kode_section = $_POST['kode_section'];
$nama_section = $_POST['nama_section'];
$join_date = $_POST['join_date'];
$start_date = $_POST['start_date'];
$exp_date = $_POST['exp_date'];
$licensi = $_POST['licensi'];
 
// menginput data ke database
mysqli_query($db,"insert into licensi values('','$NIK','$nama','$no_licensi','$nama_licensi','$kode_section','$nama_section','$join_date','$start_date','$exp_date','$licensi')");
 
// mengalihkan halaman kembali ke index.php
header("location:datalicensi.php");
 
?>