<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$tanggalbasic = $_POST['tanggalbasic'];
$materi = $_POST['materi'];
$nilai = $_POST['nilai'];


// menginput data ke database
mysqli_query($db, "INSERT INTO basictraining (NIK, tanggalbasic, materi, nilai) VALUES ('$NIK', '$tanggalbasic', '$materi', '$nilai')");


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:recordstand.php?NIK=$NIK");
 
?>