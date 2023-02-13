    

 <?php

//mengambil data dari form input
$kegiatan   = $_POST['kegiatan'];
$mulai      = $_POST['mulai'];
$selesai    = $_POST['selesai'];

//membuat koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'db_trainingcentre');

//insert data ke dalam database
mysqli_query($db, "insert into calender set kegiatan='$kegiatan', mulai='$mulai', selesai='$selesai' ");


//kembali ke halaman calender.php
header("location: calendar.php");

?>