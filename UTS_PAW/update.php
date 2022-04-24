<?php
include "koneksi.php";
$kode = $_POST["id_alisa"];
$nama = $_POST["nama_alisa"];
$alamat= $_POST["alamat_alisa"];
$email = $_POST["email_alisa"];

$sqli = "UPDATE tbl_alisa SET email_alisa = '$email', nama_alisa = '$nama', alamat_alisa = '$alamat' WHERE id_alisa = '$kode'";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi update mahasiswa gagal";
}else{
    echo "Eksekusi update mahasiswa berhasil<br/>";
    echo "<a href='view_data.php'>show data</a>";
}
?>