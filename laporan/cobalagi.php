<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
    function Header()
    {
        // Title
        $this->SetFont('Arial','',18);
        $this->Cell(0,6,'Reminder Renewal',0,1,'C');
        $this->Ln(10);
        // Ensure table header is printed
        parent::Header();
    }
}

// Connect to database
$link = mysqli_connect('localhost','root','','db_trainingcentre');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'SELECT NIK, nama, kode_section, no_licensi, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)');
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('NIK',20,'','C');
$pdf->AddCol('nama',80,'Country');
$pdf->AddCol('kode_section',40,'Pop (2001)','R');
$pdf->AddCol('no_licensi',20,'','C');
$pdf->AddCol('exp_date',20,'','C');
$prop = array('HeaderColor'=>array(255,150,100),
            'color1'=>array(210,245,255),
            'color2'=>array(255,255,210),
            'padding'=>5);
$pdf->Table($link,'SELECT NIK, nama, kode_section, no_licensi, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)',$prop);

// Save PDF to file
$pdf->Output('F', 'renewalpdf/renewal.pdf');

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

// Add PDF as attachment
$mail->addAttachment('renewalpdf/renewal.pdf');
if (file_exists('renewalpdf/renewal.pdf') && is_readable('renewalpdf/renewal.pdf')) {
    $mail->addAttachment('renewalpdf/renewal.pdf');
} else {
    // file does not exist or is not readable
}

// Send email for each row of data
$result = mysqli_query($link, "SELECT email FROM user");
while ($row = mysqli_fetch_array($result)) {
$mail->setFrom('siptrainingcentre22@gmail.com','Training Centre System'); //email pengirim
$mail->addReplyTo('siptrainingcentre22@gmail.com','Training Centre System'); //email replay
$mail->addAddress($row['email']); //email tujuan
$mail->Subject = 'Reminder Renewal This Month';
$mail->Body = "Hi Admin,

I am sending this reminder about the renewals that are coming up this month. Please update license before it expires. Attached is the data for the employees who need to renew their licenses this month.

I hope you are healthy and motivated to do these renewals!

Saya mengirimkan pengingat ini tentang Renewal yang akan datang bulan ini. Silakan memperbarui lisensi sebelum kedaluwarsa. Terlampir data untuk karyawan yang perlu memperbarui lisensi mereka dan Renewal bulan ini.

Saya harap anda sehat dan termotivasi untuk melakukan Renewal ini!

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

?>
