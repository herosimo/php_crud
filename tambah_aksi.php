<?php

include("config.php");

$type = $_POST['type'];

if ($type == 'supplier') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telefon = $_POST['telefon'];

    // query tambah data ke database
    $sql = "INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telepon`) VALUE (NULL, '$nama', '$alamat', '$telefon')";

    // run query
    $query = mysqli_query($conn, $sql);
    header('Location: index.php');
} else if ($type == 'stock') {
    $kode_supplier = $_POST['kode_supplier'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];

    // query tambah data ke database
    $sql = "INSERT INTO `stock` (`kode_stock`, `kode_supplier`, `kode_barang`, `jumlah`) VALUE (NULL, '$kode_supplier', '$kode_barang', '$jumlah')";

    // run query
    $query = mysqli_query($conn, $sql);
    header('Location: index.php');
} else if ($type == 'barang') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kode_supplier = $_POST['kode_supplier'];

    // query tambah data ke database
    $sql = "INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `kode_supplier`) VALUE (NULL, '$nama', '$harga', '$kode_supplier')";

    // run query
    $query = mysqli_query($conn, $sql);
    header('Location: index.php');
}
