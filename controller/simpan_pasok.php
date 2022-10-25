<?php
include "../db/connection.php";
$id_pasok = (int)$_POST['id_pasok'];
$id_buku = (int)$_POST['id_buku'];
$id_distributor = (int)$_POST['id_distributor'];
$jumlah = (int)$_POST['jumlah'];
$tanggal = $_POST['tanggal'];
echo $tanggal;
$sql="insert into tbpasok values ('$id_pasok','$id_distributor','$id_buku','$jumlah',
'$tanggal')";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data pasok karena :". mysqli_error($con));
header("location: ../view/tampil_pasok.php") ;
?>