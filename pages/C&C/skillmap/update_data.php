<?php
include '../../../config/koneksi.php';
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

$query = "INSERT INTO button_table (NIK, myDate, statusbt, skill) VALUES ('$NIK','$myDate','$statusbt','$skill')";
$result = mysqli_query($db, $query);
if (!$result) {
    die("Query Failed." . mysqli_error($db));
}

// after data is inserted, update the button status
$query = "UPDATE button_table SET statusbt = 'ok' WHERE NIK = '$NIK' AND skill = 'Basic Training'";
$result = mysqli_query($db, $query);
if (!$result) {
    die("Query Failed." . mysqli_error($db));
}


// redirect to the same page
if ($sub_section == "Auto") {
    header("Location: C&Cskill.php?NIK=$NIK");
} elseif ($sub_section == "Post Proses") {
    header("Location: postSkill.php?NIK=$NIK");
} else {
    // handle any other cases or provide a default redirect
}
?>
