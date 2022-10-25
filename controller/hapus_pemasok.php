<?php
    include "../db/connection.php";
    $id_pemasok = $_GET['id_pemasok'];
    $hasil = mysqli_query($con, "delete from tbpasok where id_pemasok = '$id_pemasok'");
    if (!$hasil)
        die("Gagal query data buku karena " . mysqli_error($con));
    header('location:../view/tampil_pasok.php');
?>