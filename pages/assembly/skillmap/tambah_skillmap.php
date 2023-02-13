<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$line = $_POST['line'];
$proses = $_POST['proses'];
$tanggal = $_POST['tanggal'];
$skillup = $_POST['skillup'];
$nilai = $_POST['nilai'];

// menginput data ke database
mysqli_query($db,"insert into skillmap values('$id','$NIK','$line','$proses','$tanggal','$skillup','$nilai')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:assemblyskill.php?NIK=$NIK");
 
?>