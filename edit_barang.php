<?php
include 'config.php';

$kode_barang = $_GET['kode_barang'];
$data = mysqli_query($conn, "SELECT * FROM `barang` WHERE `barang`.`kode_barang` = '$kode_barang'");
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

    <title>Edit Data Barang</title>
</head>

<body>
    <div class="container m-5">
        <h1>Edit Data Barang</h1>
        <br>
        <?php
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <form action="edit_aksi.php" method="POST">
                <input type="hidden" name="type" value="barang">
                <input type="hidden" name="kode_barang" value="<?= $d['kode_barang']; ?>">

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama_barang']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $d['harga']; ?>">
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
        <?php } ?>
    </div>

    </body>

</html>