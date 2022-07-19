<?php 
session_start();
unset($_SESSION['LOGIN']);
header('location:login.php');
die();
?>