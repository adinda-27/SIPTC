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
 
// update data ke database
mysqli_query($db,"update licensi set NIK='$NIK', nama='$nama', no_licensi='$no_licensi', nama_licensi='$nama_licensi',kode_section='$kode_section', nama_section='$nama_section', join_date='$join_date', start_date='$start_date', exp_date='$exp_date' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:datalicensi.php");
 
?>