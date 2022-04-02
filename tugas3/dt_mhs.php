<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DATA MAHASISWA</title>
</head>
<body>
<br><h3 align="center">TABEL DATA MAHASISWA</h3><br><br>
<table class="table table-success table-striped">
    <tr>
        <th> ID MHS </th>
        <th> NAMA MHS </th>
        <th> NIM MHS </th>
        <th> ALAMAT MHS </th>
        <th> ACTION </th>
    </tr>
<?php
    include "koneksi.php";
    $sql = "SELECT * FROM tbl_194";
    $hasil = mysqli_query($koneksi, $sql);

    while($row = mysqli_fetch_array($hasil))
    {
    ?>
        <tr>
            <td><?= $row["id_mhs"];?></td>
            <td><?= $row["nama_mhs"];?></td>
            <td><?= $row["nim_mhs"];?></td>
            <td><?= $row["alamat_mhs"];?></td>
            <td> <a href="form_edit.php?id=<?=$row['id_mhs']?>">Edit </a> |  <a href="delete.php?id=<?=$row['id_mhs']?>">Delete </a></td>
        </tr>
    <?php
    } 
?>
</table>
</body>
</html>
