<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$image = $_POST['image'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$join_date = $_POST['join_date'];
$bulan = $_POST['bulan'];
$line = $_POST['line'];
$stand= $_POST['stand'];
$tanggaleval = $_POST['tanggaleval'];

// menginput data ke database
mysqli_query($db,"insert into evaluasi values('$id','$image','$NIK','$nama','$join_date','$bulan','$line','$stand','$tanggaleval')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:evaluasi.php?NIK=$NIK");
 
?>