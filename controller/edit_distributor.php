<?php
include "../db/connection.php";
$id_distributor = $_POST['id_distributor'];
$nama_distributor = $_POST['nama_distributor'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$sql="update tbdistributor set nama_distributor='$nama_distributor', alamat='$alamat',
telephone='$telephone' where id_distributor='$id_distributor'";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data distributor kerena :".mysqli_error($con));
header("location:../view/tampil_distributor.php");
?>