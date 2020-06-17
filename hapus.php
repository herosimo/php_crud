<?php

include("config.php");
$type = $_GET['type'];

if ($type == 'stock') {
    $kode_stock = $_GET['kode_stock'];

    $sql = "DELETE FROM `stock` WHERE `stock`.`kode_stock` = '$kode_stock'";
    
    // run query
    $query = mysqli_query($conn, $sql);
    
    // redirect ke halaman index
    header('Location: index.php');
} else if ($type =='supplier') {
    $kode_supplier = $_GET['kode_supplier'];

    $sql = "DELETE FROM `supplier` WHERE `supplier`.`kode_supplier` = '$kode_supplier'";
    
    // run query
    $query = mysqli_query($conn, $sql);
    
    // redirect ke halaman index
    header('Location: index.php');
} else if ($type =='barang') {
    $kode_barang = $_GET['kode_barang'];

    $sql = "DELETE FROM `barang` WHERE `barang`.`kode_barang` = '$kode_barang'";
    
    // run query
    $query = mysqli_query($conn, $sql);
    
    // redirect ke halaman index
    header('Location: index.php');
}
