<?php
  // Menerima data dari client
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $kode_section = $_POST['kode_section'];

    // koneksi database
   include '../../../config/koneksi.php';
  
  // Ambil data dari tabel renewal
  $query = "SELECT * FROM renewal WHERE month(exp_date) = '$bulan' AND year(exp_date) = '$tahun' AND kode_section = '$kode_section' ";
  $result = mysqli_query($db, $query);
  
  // Konversi data ke format yang dapat diunduh, misal CSV
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
  }
  
  // Unduh file
  header('Content-Type: application/csv');
  header('Content-Disposition: attachment; filename="laporan_renewal.csv";');
  $file = fopen('php://output', 'w');
  fputcsv($file, array('id', 'NIK', 'nama', 'kode_section', 'no_licensi', 'join_date', 'start_date', 'exp_date'));
  foreach ($data as $line) {
      fputcsv($file, $line);
  }
  fclose($file);
  exit;
?>