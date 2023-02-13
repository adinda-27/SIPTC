<?php
include '../../../config/koneksi.php';

$id = $_GET['id'];

$sql = "SELECT NIK FROM kartubelajar WHERE id='$id'";
$result = mysqli_query($db, $sql);
$data = mysqli_fetch_array($result);
$NIK = $data['NIK'];

// menghapus data dari database
mysqli_query($db,"delete from kartubelajar where id='$id'");
 
// mengalihkan halaman kembali ke recordstand.php
header("location:kartubelajar.php?NIK=$NIK");
?>
