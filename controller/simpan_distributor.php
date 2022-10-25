<?php
include "../db/connection.php";
$id_distributor = $_POST['id_distributor'];
$nama_distributor = $_POST['nama_distributor'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$id_distributor = (int)$id_distributor;
$sql="insert into tbdistributor values ('$id_distributor','$nama_distributor','$alamat',
'$telephone')";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data distributor karena :". mysqli_error($con));
header("location: ../view/tampil_distributor.php") ;
?>