<?php
    $con = mysqli_connect("localhost","root","","dbtokobuku");

    if(mysqli_connect_errno()){
        echo "Gagal untuk terkoneksi ke database " . mysqli_connect_error();
        exit();
    };

?>