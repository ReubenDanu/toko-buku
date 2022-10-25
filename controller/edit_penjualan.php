<?php
include "../db/connection.php";
$id_penjualan = $_POST['id_penjualan'];
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$sql="update tbpenjualan set id_user='$id_user', id_buku='$id_buku',
tanggal='$tanggal', jumlah='$jumlah' where id_penjualan='$id_penjualan'";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data penjualan kerena :".mysqli_error($con));
header("location:../view/tampil_penjualan.php");
?>