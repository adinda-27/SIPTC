<?php
// Connect to database
$link = mysqli_connect('localhost','root','','db_trainingcentre');

// Load PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

// Set up email parameters
$mail->isSMTP();
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465;
$mail->Username = "siptrainingcentre22@gmail.com"; // GMAIL username
$mail->Password = "vjfonrojgzapydpy";

// Send email for each row of data
$queries = array(
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 30 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 14 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 7 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 6 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 5 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 4 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 3 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 2 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
    "SELECT pegawai.NIK, pegawai.nama, pegawai.kode_section, pegawai.sub_section, renewal.exp_date, renewal.no_licensi, pegawai.email FROM pegawai JOIN renewal ON pegawai.NIK = renewal.NIK WHERE DATEDIFF(renewal.exp_date, NOW()) <= 1 AND DATEDIFF(renewal.exp_date, NOW()) >= 0",
);
foreach ($queries as $query) {
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
$mail->setFrom('siptrainingcentre22@gmail.com','Training Centre System'); //email pengirim
$mail->addReplyTo('siptrainingcentre22@gmail.com','Training Centre System'); //email replay
$mail->addAddress($row['email']); //email tujuan
$mail->Subject = 'Reminder Renewal';
$mail->Body = "Dear ".$row['nama'].", ".$row['NIK']."\n\nThis is a reminder that your renewal is approaching. Your renewal for ".$row['no_licensi']." will expire on ".$row['exp_date']."

Please renew it as soon as possible

Note: If you have renewed, immediately inform our admin to update your data in the system, ok?

Ini adalah pengingat bahwa renewal Anda akan segera datang. Renewal Anda untuk ".$row['no_licensi']." akan expired pada ".$row['exp_date']."

Silakan memperbarui secepat mungkin

Catatan: Jika Anda sudah memperbarui, silahkan reply email ini agar admin memperbaharui data anda. 

Best Regards,
Training Centre System";

$mail->send();
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    error_log("Script started at " . date("Y-m-d H:i:s"));
    error_log("Sending email to " . $mail);
} else {
    echo "Email sent!";
}
}
}



?>
