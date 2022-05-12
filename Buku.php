<?php
require('./Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | Buku</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css">

</head>
<body class="body bg-secondary">

<?php
    $title1= 'buku';
    include('./Template.php');
?>

    <div class="container md-2 mt-4">
    <a href="FormBuku.php" class="btn btn-success">Tambah Data</a>
    </div>
    
    <div class="container md-2">
        <table class="table table-bordered table-striped table-dark">
            <tr>
                <th>Id Buku</th>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?= viewData("buku") ?>
    </div>
</body>
</html>