<?php 
include('add.html');
include('db.php');
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();
 }

if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	mysqli_query($con,"insert into student(name,city) values('$name','$city')");
	header('location:dashboard.php');
	die();
}
?>



