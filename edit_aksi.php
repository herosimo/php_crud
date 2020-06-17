<?php

include("config.php");

// menangkap data yang di kirim dari form
$type = $_POST['type'];
if ($type == 'supplier') {
    $kode_supplier = $_POST['kode_supplier'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telefon = $_POST['telefon'];
    
    // query update data ke database
    $sql = "UPDATE `supplier` SET `nama_supplier` = '$nama', `alamat` = '$alamat', `no_telepon` = '$telefon' WHERE `supplier`.`kode_supplier` = '$kode_supplier'";
    
    // run query
    $query = mysqli_query($conn, $sql);
    
    // redirect ke halaman index
    header("location:index.php");
} else if ($type == 'barang') {
    $kode_barang = $_POST['kode_barang'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kode_supplier = $_POST['kode_supplier'];
    
    // query update data ke database
    $sql = "UPDATE `barang` SET `nama_barang` = '$nama', `harga` = '$harga', `kode_supplier` = '$kode_supplier' WHERE `barang`.`kode_barang` = '$kode_barang'";
    
    // run query
    $query = mysqli_query($conn, $sql);
    
    // redirect ke halaman index
    header("location:index.php");
}  else if ($type == 'stock') {
    $kode_stock = $_POST['kode_stock'];
    $kode_supplier = $_POST['kode_supplier'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];
    
    // query update data ke database
    $sql = "UPDATE `stock` SET `kode_supplier` = '$kode_supplier', `kode_barang` = '$kode_barang', `jumlah` = '$jumlah' WHERE `stock`.`kode_stock` = '$kode_stock'";
    
    // run query
    $query = mysqli_query($conn, $sql);
    
    // redirect ke halaman index
    header("location:index.php");
}
