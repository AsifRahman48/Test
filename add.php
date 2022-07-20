<?php 
//include('add.html');
include('database.php');
$obj=new query();

    $name='';
	$email='';
	$mobile='';
	$id='';

if(isset($_GET['id']) && $_GET['id']!=''){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$result=$obj->getData('user','*',$condition_arr);
	$name=$result['0']['name'];
	$email=$result['0']['email'];
	$mobile=$result['0']['mobile'];
}

if(isset($_POST['submit'])){
	$name=$obj->get_safe_str($_POST['name']);
	$email=$obj->get_safe_str($_POST['email']);
	$mobile=$obj->get_safe_str($_POST['mobile']);
	$condition_arr=array('name'=>$name,'email'=>$email,'mobile'=>$mobile);

	if($id==''){
		$obj->insertData('user',$condition_arr);
	}else{
		$obj->updateData('user',$condition_arr,'id',$id);
	}

	
	header('location:dashboard.php');
}

session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();
 }
/*
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	mysqli_query($con,"insert into student(name,city) values('$name','$city')");
	header('location:dashboard.php');
	die();
}*/
?>
<a href="logout.php">Log Out</a><br/>

<form method="post">
	<table>
		<div>
			<label>Name</label>
		   <input type="textbox" name="name" placeholder="Name" required value="<?php echo $name ?>">
		</div>
		<div>
			<label>Email</label>
			<input type="textbox" name="email"  placeholder="Email" required value="<?php echo $email ?>">
		</div>
		<div>
			<label>Mobile</label>
			<input type="textbox" name="mobile"  placeholder="Mobile" required value="<?php echo $mobile ?>">
		</div>
		<div>
			<td></td>
			<input type="submit" name="submit"/>
		</div>
	</table>
</form>


