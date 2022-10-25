<?php
    include "../db/connection.php";
    $id_user = $_GET['id_user'];
    $hasil = mysqli_query($con, "delete from tbuser where id_user = '$id_user'");
    if (!$hasil)
        die("Gagal query data user karena " . mysqli_error($con));
    header('location:../view/tampil_user.php');
?>