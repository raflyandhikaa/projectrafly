<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_cashier1";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
