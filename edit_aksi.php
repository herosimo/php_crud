<?php

include("config.php");

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// query update data ke database
$sql = "UPDATE `mahasiswa` SET `nama` = '$nama', `nim` = '$nim', `alamat` = '$alamat' WHERE `mahasiswa`.`id` = '$id'";

// run query
$query = mysqli_query($conn, $sql);

// redirect ke halaman index
header("location:index.php");
