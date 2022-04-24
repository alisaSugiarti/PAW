<?php
include "koneksi.php";
$kode=$_GET["id"];

$sql="DELETE FROM tbl_alisa WHERE id_alisa=$kode";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data mahasiswa berhasil di delete<br/>";
    echo "<a href='view_data.php'> Show data</a>";
}

?>