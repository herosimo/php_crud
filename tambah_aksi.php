<?php

include("config.php");

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// query tambah data ke database
$sql = "INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`) VALUE (NULL, '$nama', '$nim', '$alamat')";

// run query
$query = mysqli_query($conn, $sql);

// redirect ke halaman index
header('Location: index.php');
