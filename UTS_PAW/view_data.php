<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>DATA MAHASISWA</title>
</head>
<body>
<br><h3 align="center">TABEL MAHASISWA</h3><br><br>
<table class="table table-success table-striped">
    <tr>
        <th> Id </th>
        <th> Nama Lengkap </th>
        <th> Alamat </th>
        <th> Email </th>
        <th> Action </th>
    </tr>
<?php
    include "koneksi.php";
    $sql = "SELECT * FROM tbl_alisa";
    $hasil = mysqli_query($koneksi, $sql);

    while($row = mysqli_fetch_array($hasil))
    {
    ?>
        <tr>
            <td><?= $row["id_alisa"];?></td>
            <td><?= $row["nama_alisa"];?></td>
            <td><?= $row["email_alisa"];?></td>
            <td><?= $row["alamat_alisa"];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_alisa']?>"><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i>EDIT</a> |  <a href="delete.php?id=<?=$row['id_alisa']?>"><i class='material-icons'data-toggle='tooltip'title='Delete'>&#xE872;</i>Delete </a></td>
        </tr>
    <?php
    } 
?>
</table>
<a href="formtambah.php" class="btn btn-primary mt-5">Tambah Data</a>
</body>
</html>
