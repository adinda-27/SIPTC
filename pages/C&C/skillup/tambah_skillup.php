<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$trainingmesin = $_POST['trainingmesin'];
$date= $_POST['date'];
$teori = $_POST['teori'];
$practice= $_POST['practice'];
$trainer= $_POST['trainer'];

// menginput data ke database
mysqli_query($db,"insert into skillupcc values('','$NIK','$trainingmesin','$date','$teori','$practice','$trainer')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:skillup.php?NIK=$NIK");
 
?>