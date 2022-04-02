<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "alisa";

// $koneksi = mysqli_connect($host,$user,$password,$dbname);
include "koneksi.php";
$nama = $_POST["nama_mhs"];
$nim = $_POST["nim_mhs"];
$alamat = $_POST["alamat_mhs"];

$sqli = "INSERT INTO tbl_194 VALUES(null,'$nama','$nim','$alamat')";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi tambah mahasiswa gagal";
}else{
    echo "Eksekusi tambah mahasiswa berhasil<br/>";
    echo "<a href='dt_mhs.php'>show data</a>";
}
?>
