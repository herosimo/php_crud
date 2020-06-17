<?php
include 'config.php';

$kode_stock = $_GET['kode_stock'];
$data = mysqli_query($conn, "SELECT * FROM `stock` WHERE `stock`.`kode_stock` = '$kode_stock'");
$supplier_result = mysqli_query($conn, "SELECT * FROM supplier");
$barang_result = mysqli_query($conn, "SELECT * FROM barang");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Data Stock</title>
</head>

<body>
    <div class="container m-5">
        <h1>Edit Data Stock</h1>
        <br>
        <?php
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form action="edit_aksi.php" method="POST">
                <input type="hidden" name="type" value="stock">
                <input type="hidden" name="kode_stock" value="<?= $d['kode_stock']; ?>">

                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?php echo $d['jumlah']; ?>">
                        </div>
                    </div>

                <div class="form-group row">
                    <label for="kode_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kode_supplier" id="kode_supplier">
                            <?php
                            while ($d = mysqli_fetch_array($supplier_result)) { ?>                        
                                <option value=<?= $d['kode_supplier']; ?>><?= $d['kode_supplier']; ?> - <?= $d['nama_supplier']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kode_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kode_barang" id="kode_barang">
                            <?php
                            while ($d = mysqli_fetch_array($barang_result)) { ?>                        
                                <option value=<?= $d['kode_barang']; ?>><?= $d['kode_barang']; ?> - <?= $d['nama_barang']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <?php
            echo $d['kode_stock'];
            echo $d['jumlah'];
                ?>


                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        <?php } ?>
    </div>

    </body>

</html>