<?php
include 'config.php';

$kode_supplier = $_GET['kode_supplier'];
$data = mysqli_query($conn, "SELECT * FROM `supplier` WHERE `supplier`.`kode_supplier` = '$kode_supplier'");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Data Supplier</title>
</head>

<body>
    <div class="container m-5">
        <h1>Edit Data Supplier</h1>
        <br>
        <?php
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <form action="edit_aksi.php" method="POST">
                <input type="hidden" name="type" value="supplier">
                <input type="hidden" name="kode_supplier" value="<?= $d['kode_supplier']; ?>">
                
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama_supplier']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $d['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefon" class="col-sm-2 col-form-label">No Telefon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefon" id="telefon" value="<?php echo $d['no_telepon']; ?>">
                    </div>
                </div>


                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        <?php } ?>
    </div>
</body>

</html>