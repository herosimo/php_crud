<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tambah Data Supplier</title>
</head>

<body>
    <div class="container m-5">
        <h1>Tambah Data Supplier</h1>
        <br>
        <form action="tambah_aksi.php" method="POST">
            <input type="hidden" name="type" value="supplier">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Supplier</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Supplier">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="telefon" class="col-sm-2 col-form-label">No Telefon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefon" id="telefon" placeholder="No Telefon">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>