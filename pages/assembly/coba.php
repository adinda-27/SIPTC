<form method="post" enctype="multipart/form-data">
  <input type="file" name="file_excel">
  <button type="submit" name="submit">Unggah</button>
</form>


<?php

// Pastikan ekstensi PHPExcel sudah terinstal dan terload
require_once '../../PHPExcel/Classes/PHPExcel.php';

// Pastikan form memiliki atribut enctype="multipart/form-data"
if(isset($_POST['submit'])) {
  // Tentukan direktori tujuan untuk menyimpan file Excel yang diunggah
  $upload_dir = 'uploads/';
  
  // Validasi file yang diunggah
  $allowed_ext = array('xls', 'xlsx');
  $file_name = $_FILES['file_excel']['name'];
  $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
  if(!in_array($file_ext, $allowed_ext)) {
    die('Hanya file Excel yang diizinkan.');
  }
  
  // Pindahkan file Excel yang diunggah ke direktori tujuan
  $upload_dir = '../../dist/upload';
  $file_path = $upload_dir . $file_name;
  if(move_uploaded_file($_FILES['file_excel']['tmp_name'], $file_path)) {
    // Baca file Excel yang telah diunggah
    $objPHPExcel = PHPExcel_IOFactory::load($file_path);
    $sheet = $objPHPExcel->getSheet(0); // Ambil sheet pertama
    $highestRow = $sheet->getHighestRow(); // Ambil baris terakhir yang terisi
    $highestColumn = $sheet->getHighestColumn(); // Ambil kolom terakhir yang terisi
    
    // Iterasi melalui setiap baris dan kolom untuk membaca data
    for ($row = 1; $row <= $highestRow; $row++){
      // Ambil data pada setiap kolom sesuai dengan nama kolom
      $NIK = $sheet->getCellByColumnAndRow(0, $row)->getValue();
      echo "NIK: $NIK";
      $date = $sheet->getCellByColumnAndRow(1, $row)->getValue();
      $materi = $sheet->getCellByColumnAndRow(2, $row)->getValue();
      $pengajar = $sheet->getCellByColumnAndRow(3, $row)->getValue();
      
      if (is_numeric($NIK)) {
        $NIK = (int)$NIK;
        
        // Lanjutkan proses insert ke database
        // Sambungkan ke database
        try {
          $db = new PDO('mysql:host=localhost;dbname=db_trainingcentre', 'root', '');
        } catch (PDOException $e) {
          die("Error: " . $e->getMessage());
        }

        // Buat query INSERT
        $query = "INSERT INTO kartubelajar (NIK, date, materi, pengajar) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([(int)$NIK, $date, $materi, $pengajar]);
      } else {
        // Tindakan yang akan dilakukan jika NIK bukan angka
        // Misalnya, menampilkan pesan error
        echo "NIK harus angka.";
      }
    }
    
    echo "Data berhasil diimpor ke database.";
  }
}

?>
