<?php

include 'config.php';
$stock_result = mysqli_query($conn, "SELECT * FROM stock WHERE `stock`.`kode_supplier` = '7'");
$barang_result = mysqli_query($conn, "SELECT * FROM barang ORDER BY harga ASC");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Soal - Responsi</title>
</head>

<body>
    <!-- Soal 4 -->
    <div class="container m-5">
        <h1>Soal 4.</h1>
        <p>
            Lakukan query untuk menampilkan data stock yang berasal dari salah satu saja supplier, misalnya supplier xxxx.
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($d = mysqli_fetch_array($stock_result)) { ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $d['kode_stock']; ?></td>
                        <td><?= $d['kode_supplier']; ?></td>
                        <td><?= $d['kode_barang']; ?></td>
                        <td><?= $d['jumlah']; ?></td>
                        <td>
                            <a href="edit_stock.php?kode_stock=<?php echo $d['kode_stock']; ?>" class="badge badge-success">Edit</a>
                            <a href="hapus.php?type=stock&kode_stock=<?php echo $d['kode_stock']; ?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Soal 5 -->
    <div class="container m-5">
        <h1>Soal 5.</h1>
        <p>
            Lakukan query untuk menampilkan data supplier yang memiliki barang xxxxx (salah satu barang) mulai dari harga termurah
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kode Supplier</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($d = mysqli_fetch_array($barang_result)) { ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $d['kode_barang']; ?></td>
                        <td><?= $d['nama_barang']; ?></td>
                        <td><?= $d['harga']; ?></td>
                        <td><?= $d['kode_supplier']; ?></td>
                        <td>
                            <a href="edit_barang.php?kode_barang=<?php echo $d['kode_barang']; ?>" class="badge badge-success">Edit</a>
                            <a href="hapus.php?type=barang&kode_barang=<?php echo $d['kode_barang']; ?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>