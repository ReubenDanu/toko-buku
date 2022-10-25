<?php
    include "../db/connection.php";
    $id_buku = $_GET['id_buku'];
    $hasil = mysqli_query($con, "delete from tbbuku where id_buku = '$id_buku'");
    if (!$hasil)
        die("Gagal query data buku karena " . mysqli_error($con));
    header('location:../view/tampil_buku.php');
?>