<?php

// konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// membuat koneksi ke mysql server
$conn = mysqli_connect($servername, $username, $password, $database);

// notifikasi jika konek ke myqsql server gagal
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
