<?php 
session_start();
// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$image = $_POST['image'];
$nama = $_POST['nama'];
$line = $_POST['line'];
$stand = $_POST['stand'];
$test1= $_POST['test1'];
$test2= $_POST['test2'];
$test3= $_POST['test3'];
$hasil= $_POST['hasil'];
$konsentrasi1= $_POST['konsentrasi1'];
$konsentrasi2= $_POST['konsentrasi2'];
$konsentrasi3= $_POST['konsentrasi3'];
$hasilkonsen= $_POST['hasilkonsen'];
// menginput data ke database
mysqli_query($db,"insert into lulusassy values('$id','$NIK','$image','$nama','$line','$stand','$test1','$test2','$test3','$hasil','$konsentrasi1','$konsentrasi2','$konsentrasi3','$hasilkonsen')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:lulus.php?NIK=$NIK");
 
?>