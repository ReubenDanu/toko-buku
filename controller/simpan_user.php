<?php
include "../db/connection.php";
$id_user = $_POST['id_user'];
$nama = $_POST['nama_user'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses'];
$sql="insert into tbuser values ('$id_user', '$nama', '$alamat','$telephone',
'$username', '$password', '$hak_akses')";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data user karena :". mysqli_error($con));
header("location: ../view/tampil_user.php") ;
?>