<?php
include "../db/connection.php";
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses'];
$sql="update tbuser set nama='$nama', alamat='$alamat',
telephone='$telephone', username='$username', password='$password',
hak_akses='$hak_akses' where id_user='$id_user'";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data buku kerena :".mysqli_error($con));
header("location:../view/tampil_user.php");
?>