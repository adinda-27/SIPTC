:: Connect to database
mysql -h localhost -u root -p db_trainingcentre

:: Generate PDF
pdf.exe

:: Add first page to PDF
pdf.exe -AddPage

:: Output all columns in first table
mysql -e "SELECT NIK, nama, kode_section, no_licensi, join_date, start_date, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)" | pdf.exe -Table -

:: Add second page to PDF
pdf.exe -AddPage

:: Specify 3 columns in second table
pdf.exe -AddCol NIK 20 C
pdf.exe -AddCol Nama 40 Country
pdf.exe -AddCol Kode_Section 40 Pop 2001 R
pdf.exe -AddCol No_Licensi 20 C
pdf.exe -AddCol JOD 20 C
pdf.exe -AddCol Start_Date 20 C
pdf.exe -AddCol Exp_Date 20 C

:: Output second table
mysql -e "SELECT NIK, nama, kode_section, no_licensi, join_date, start_date, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)" | pdf.exe -Table %prop%

:: Save PDF to variable
pdf.exe -Output F renewalpdf/renewal.pdf

:: Delete PDF if it already exists
if exist renewalpdf/renewal.pdf del renewalpdf/renewal.pdf

:: Save PDF to file
pdf.exe -Output F renewalpdf/renewal.pdf

:: Load PHPMailer library
phpmailer.exe

:: Set up email parameters
phpmailer.exe -SMTPAuth -SMTPSecure ssl -Host smtp.gmail.com -Port 465 -Username siptrainingcentre22@gmail.com -Password iwyimhutgmvqbqgc

:: Add PDF as attachment
phpmailer.exe -addAttachment renewalpdf/renewal.pdf

:: Send email for each row of data
for /f "tokens=*" %%i in ('mysql -e "SELECT NIK, email FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)"') do (
    set "line=%%i"
    set "NIK=%%i"
    set "email=%%j"

    phpmailer.exe -setFrom siptrainingcentre22@gmail.com Training Centre System
    phpmailer.exe -addReplyTo siptrainingcentre22@gmail.com Training Centre System
    phpmailer.exe -addAddress %email% %NIK%
    phpmailer.exe -Subject Reminder Renewal Bulan Ini
    phpmailer.exe -Body "Dear %NIK%,\n\nPlease find attached the renewal reminder for this month.\n\nSincerely,\nTraining Centre System"
    phpmailer.exe -send
)

:: Disconnect from database
mysql -h -u root -p
