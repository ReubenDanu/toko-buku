<?php
include "../db/connection.php";
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$no_isbn = $_POST['no_isbn'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$harga_pokok = $_POST['harga_pokok'];
$harga_jual = $_POST['harga_jual'];
$diskon = $_POST['diskon'];
$sql="update tbbuku set judul_buku='$judul_buku', no_isbn='$no_isbn',
penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit',
stok='$stok', harga_pokok='$harga_pokok', harga_jual='$harga_jual',
diskon='$diskon' where id_buku='$id_buku'";
$hasil=mysqli_query($con, $sql);
if(!$hasil)
die("Gagal query data buku kerena :".mysqli_error($con));
header("location:../view/tampil_buku.php");
?>