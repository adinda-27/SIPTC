<?php
 
// Konfigurasi Database
$host       = 'localhost'; // host
$username   = 'root'; // username database
$password   = ''; // password database
$dbname     = 'db_trainingcentre'; // nama database
 
$db = mysqli_connect($host, $username, $password, $dbname);
 
if ($db) {
    echo "";
} else {
    echo "Database Error";
}
?>