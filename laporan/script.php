<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_trainingcentre";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from database
$sql = "SELECT NIK, nama, kode_section, no_licensi, join_date, start_date, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)";
$result = mysqli_query($conn, $sql);

// Generate PDF
ob_start();
include('laporan/renewal.php');
$pdf_content = ob_get_clean();

// Load PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

// Set up email parameters
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'siptrainingcentre22@gmail.com';
$mail->Password = 'iwyimhutgmvqbqgc';

// Add PDF as attachment
$mail->addStringAttachment($pdf_content, 'renewal.pdf');

// Send email for each row of data
while ($row = mysqli_fetch_assoc($result)) {
    $mail->setFrom('siptrainingcentre22@gmail.com', 'Training Centre Sistem');
    $mail->addAddress('adselna11@gmail.com', 'Admin');
    $mail->Subject = 'Reminder: Renewal Expiring Date';
    $mail->Body = 'Hi Admin , just a reminder that your renewal expiring date is on 1 month. Please renew your licensi before the expiring date. <br> <br> Attached is the PDF file of the data.';
    $mail->send();
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Email sent!";
    }
}

// Close connection
mysqli_close($conn);

?>
