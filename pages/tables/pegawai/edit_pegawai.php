<?php 
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
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$image = $_POST['image'];
 
// update data ke database
mysqli_query($db,"update pegawai set nama='$nama',kode_section='$kode_section', section='$section', sub_section='$sub_section', join_date='$join_date', finish_kontrak='$finish_kontrak', jenis_kelamin = '$jenis_kelamin', status='$status', ttl='$ttl', no_hp='$no_hp', alamat='$alamat', agama='$agama', pekerjaan='$pekerjaan', image='$image' where NIK='$NIK'");
// mengalihkan halaman kembali ke index.php
header("location:datapegawai.php");
 
?>