<?php 
    include '../db/connection.php';
    session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM tbuser WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['username'];
        echo 'berhasil login';
        header("Location: ../view/overview.php");
    } else {
        header("location: ../view/login.php?pesan='salah'");
    }

}  

?>