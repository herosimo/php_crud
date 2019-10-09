<?php

include("config.php");

// ambil data id dari formulir
$id = $_GET['id'];

// query hapus data ke database
$sql = "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id` = '$id'";

// run query
$query = mysqli_query($conn, $sql);

// redirect ke halaman index
header('Location: index.php');
