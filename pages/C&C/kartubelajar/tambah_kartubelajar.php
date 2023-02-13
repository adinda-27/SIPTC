<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$date= $_POST['date'];
$materi = $_POST['materi'];
$pengajar= $_POST['pengajar'];

// menginput data ke database
mysqli_query($db,"insert into kartubelajar values('$id','$NIK','$date','$materi','$pengajar')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:kartubelajar.php?NIK=$NIK");
 
?>