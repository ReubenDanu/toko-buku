<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:../view/login.php?pesan="bukan_user"');
	}
?>