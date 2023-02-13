<?php
  // get the NIK from the request
  $NIK = $_GET['NIK'];

  // koneksi database
include '../../../config/koneksi.php';

  // prepare and execute the query
  $stmt = $db->prepare("SELECT nama FROM pegawai WHERE NIK = ?");
  $stmt->bind_param("s", $NIK);
  $stmt->execute();

  // get the result
  $result = $stmt->get_result();

  // fetch the data
  $data = $result->fetch_assoc();

  // return the data as JSON
  echo json_encode($data);
?>
