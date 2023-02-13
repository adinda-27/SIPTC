<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$no_penghargaan = $_POST['no_penghargaan'];
$nama_penghargaan = $_POST['nama_penghargaan'];
$nama_pemberi = $_POST['nama_pemberi'];
$institusi = $_POST['institusi'];
$tahun_diterima = $_POST['tahun_diterima'];
$penghargaan = $_POST['penghargaan'];
 
// update data ke database
mysqli_query($db,"update penghargaan set nama='$nama', NIK='$NIK', no_penghargaan='$no_penghargaan', nama_penghargaan='$nama_penghargaan', nama_pemberi='$nama_pemberi', institusi='institusi', tahun_diterima='$tahun_diterima', penghargaan='$penghargaan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:datapenghargaan.php");
 
?>