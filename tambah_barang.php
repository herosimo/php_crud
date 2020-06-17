<?php

include 'config.php';
$supplier_result = mysqli_query($conn, "SELECT * FROM supplier");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tambah Data Barang</title>
</head>

<body>
    <div class="container m-5">
        <h1>Tambah Data Barang</h1>
        <br>
        <form action="tambah_aksi.php" method="POST">
            <input type="hidden" name="type" value="barang">
            <div class="form-group row">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Barang">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                </div>
            </div>

            <div class="form-group row">
                <label for="kode_supplier" class="col-sm-2 col-form-label">Kode Supplier</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kode_supplier" id="kode_supplier">
                        <?php
                        while ($d = mysqli_fetch_array($supplier_result)) { ?>                        
                            <option value=<?= $d['kode_supplier']; ?>><?= $d['kode_supplier']; ?> - <?= $d['nama_supplier']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>

    </body>

</html>