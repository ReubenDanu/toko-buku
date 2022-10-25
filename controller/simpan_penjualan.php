<?php
include "../db/connection.php";
$id_penjualan = (int)$_POST['id_penjualan'];
$id_user = (int)$_POST['id_user'];
$id_buku = (int)$_POST['id_buku'];
$tanggal = $_POST['tanggal'];
$jumlah = (int)$_POST['jumlah'];
$sql="insert into tbpenjualan values ('$id_penjualan','$id_user','$id_buku',
'$tanggal','$jumlah')";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data penjualan karena :". mysqli_error($con));
header("location: ../view/tampil_penjualan.php") ;
?>