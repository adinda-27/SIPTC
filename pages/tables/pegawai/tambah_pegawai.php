<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$kode_section = $_POST['kode_section'];
$section = $_POST['section'];
$sub_section = $_POST['sub_section'];
$join_date = $_POST['join_date'];
$finish_kontrak = $_POST['finish_kontrak'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status = $_POST['status'];
$ttl = $_POST['ttl'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$image = $_POST['image'];
 
// menginput data ke database
mysqli_query($db,"insert into pegawai values('$NIK','$nama','$kode_section','$section','$sub_section','$join_date','$finish_kontrak','$jenis_kelamin','$status','$ttl','$email','$no_hp','$alamat','$agama','$pekerjaan','$image')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:datapegawai.php");
 
?>