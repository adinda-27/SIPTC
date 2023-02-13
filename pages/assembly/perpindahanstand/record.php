<?php
include '../../../config/koneksi.php';

// Retrieve form data
$id_line = $_POST['id_line'];
$NIK = $_POST['NIK'];
$materi = $_POST['materi'];
$materi1 = $_POST['materi1'];
$materi2 = $_POST['materi2'];
$materi3 = $_POST['materi3'];
$materi4 = $_POST['materi4'];
$materi5 = $_POST['materi5'];
$materi6 = $_POST['materi6'];
$materi7 = $_POST['materi7'];
$materi8 = $_POST['materi8'];
$materi9 = $_POST['materi9'];
$materi10 = $_POST['materi10'];
$materi11 = $_POST['materi11'];
$materi12 = $_POST['materi12'];
$materi13 = $_POST['materi13'];
$materi14 = $_POST['materi14'];
$cb = $_POST['cb'];
$cb1 = $_POST['cb1'];
$cb2 = $_POST['cb2'];
$cb3 = $_POST['cb3'];
$cb4= $_POST['cb4'];
$cb5 = $_POST['cb5'];
$cb6 = $_POST['cb6'];
$cb7 = $_POST['cb7'];
$cb8 = $_POST['cb8'];
$cb9 = $_POST['cb9'];
$cb10 = $_POST['cb10'];
$cb11 = $_POST['cb11'];
$cb12 = $_POST['cb12'];
$cb13 = $_POST['cb13'];
$cb14 = $_POST['cb14'];
$tanggal = $_POST['tanggal'];
$model = $_POST['model'];
$conveyor = $_POST['conveyor'];
$speed1 = $_POST['speed1'];
$speed2 = $_POST['speed2'];
$speed3 = $_POST['speed3'];
$speed4 = $_POST['speed4'];
$speed5 = $_POST['speed5'];

$sql = "INSERT INTO recordstand (id_line, NIK, materi,  materi1,  materi2,  materi3,  materi4,  materi5,  materi6,  materi7,  materi8,  materi9,  materi10,  materi11,  materi12,  materi13,  materi14,  cb, cb1, cb2, cb3, cb4, cb5, cb6, cb7, cb8, cb9, cb10, cb11, cb12, cb13, cb14, tanggal, model, conveyor, speed1, speed2, speed3, speed4, speed5)
  VALUES ('$id_line', '$NIK', '$materi', '$materi1', '$materi2', '$materi3', '$materi4', '$materi5', '$materi6', '$materi7', '$materi8', '$materi9', '$materi10', '$materi11', '$materi12', '$materi13', '$materi14', '$cb', '$cb1', '$cb2', '$cb3', '$cb4', '$cb5', '$cb6', '$cb7', '$cb8', '$cb9', '$cb10', '$cb11', '$cb12', '$cb13', '$cb14', '$tanggal', '$model', '$conveyor', '$speed1', '$speed2', '$speed3', '$speed4', '$speed5')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($db);
// mengalihkan halaman kembali ke index.php
header("location:standrecord.php?id=$id_line");
?>
