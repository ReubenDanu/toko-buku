<?php
include "../db/connection.php";
$id_pemasok = $_POST['id_pemasok'];
$id_distributor = $_POST['id_distributor'];
$id_buku = $_POST['id_buku'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$sql="update tbpasok set id_distributor='$id_distributor', id_buku='$id_buku',
jumlah='$jumlah', tanggal='$tanggal' where id_pemasok='$id_pemasok'";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data pemasok kerena :".mysqli_error($con));
header("location:../view/tampil_pasok.php");
?>