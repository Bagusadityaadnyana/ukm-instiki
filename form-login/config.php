<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "db_ukm_instiki"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
