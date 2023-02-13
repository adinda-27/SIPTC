
<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$myDate = $_POST['myDate'];
$statusbt = $_POST['statusbt'];
$skill = $_POST['skill'];
$sql = "SELECT sub_section FROM pegawai WHERE NIK = '$NIK'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sub_section = $row["sub_section"];
    }
} else {
    echo "0 results";
}

// update data ke database
mysqli_query($db,"UPDATE button_table SET myDate = '$myDate', statusbt = 'ok' WHERE NIK = '$NIK' AND skill = '$skill'");
 
// mengalihkan halaman kembali ke index.php
if ($sub_section == "Auto") {
    header("Location: C&Cskill.php?NIK=$NIK");
} elseif ($sub_section == "Post Proses") {
    header("Location: postSkill.php?NIK=$NIK");
} else {
    // handle any other cases or provide a default redirect
}
?>