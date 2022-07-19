<?php 
session_start();
include('index.php');
include('db.php');
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $res=mysqli_query($con,"select * from user where username='$username' and password='$password'");
    if(mysqli_num_rows($res)>0){
        $_SESSION['IS_LOGIN']='yes';
        header('location:dashboard.php');
   die();
    }else{
        echo "please enter valid login details";
    }
}
?>