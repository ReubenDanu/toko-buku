<?php
    include "../db/connection.php";
    $id_distributor = $_GET['id_distributor'];
    $hasil = mysqli_query($con, "delete from tbdistributor where id_distributor = '$id_distributor'");
    if (!$hasil)
        die("Gagal query data buku karena " . mysqli_error($con));
    header('location:../view/tampil_distributor.php');
?>