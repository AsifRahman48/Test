<?php 
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();
 }
?>
<?php
include('db.php');
$id=mysqli_real_escape_string($con,$_GET['id']);
if($id==''){
	header('location:dashboard.php');
	die();
}
mysqli_query($con,"delete from student where id='$id'");
header('location:dashboard.php');
die();
?>

