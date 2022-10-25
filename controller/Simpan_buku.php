<?php
include "../db/connection.php";
$id_buku = (int)$_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$no_isbn = (int)$_POST['no_isbn'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = (int)$_POST['tahun_terbit'];
$stok = (int)$_POST['stok'];
$harga_pokok = (int)$_POST['harga_pokok'];
$harga_jual = (int)$_POST['harga_jual'];
$diskon = (int)$_POST['diskon'];
$sql="insert into tbbuku values ('$id_buku','$judul_buku','$no_isbn',
'$penulis','$penerbit','$tahun_terbit','$stok','$harga_pokok',
'$harga_jual','$diskon')";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data buku karena :". mysqli_error($con));
header("location: ../view/tampil_buku.php") ;
?>