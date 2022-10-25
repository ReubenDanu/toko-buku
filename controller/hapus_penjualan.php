<?php
    include "../db/connection.php";
    $id_penjualan = $_GET['id_penjualan'];
    $hasil = mysqli_query($con, "delete from tbpenjualan where id_penjualan = '$id_penjualan'");
    if (!$hasil)
        die("Gagal query data penjualan karena " . mysqli_error($con));
    header('location:../view/tampil_penjualan.php');
?>