<?php
include "koneksi.php";
$nama = $_POST["nama_alisa"];
$alamat = $_POST["alamat_alisa"];
$email = $_POST["email_alisa"];

$sqli = "INSERT INTO tbl_alisa VALUES(null,'$nama','$email','$alamat')";
$hasil = mysqli_query($koneksi, $sqli);

if(!$hasil){
    echo "Eksekusi tambah mahasiswa gagal";
}else{
    echo "Eksekusi tambah mahasiswa berhasil<br/>";
    echo "<a href='view_data.php'>show data</a>";
}
?>