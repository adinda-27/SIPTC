<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$no_penghargaan = $_POST['no_penghargaan'];
$nama_penghargaan = $_POST['nama_penghargaan'];
$nama_pemberi = $_POST['nama_pemberi']; 
$institusi = $_POST['institusi'];
$tahun_diterima = $_POST['tahun_diterima'];
$penghargaan = $_POST['penghargaan'];
// menginput data ke database
mysqli_query($db,"insert into penghargaan values('$NIK','$nama','$no_penghargaan', '$nama_penghargaan','$nama_pemberi','$institusi','$tahun_diterima','$penghargaan', '')");
 
// mengalihkan halaman kembali ke index.php
header("location:datapenghargaan.php");
 
?>