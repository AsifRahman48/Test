<?php 
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
   header('location:login.php');
   die();
}
?>

<h2>Welcome User</h2>
<a href="logout.php">Log Out</a><br/>

<?php
include('database.php');
$obj=new query();
if(isset($_GET['type']) && $_GET['type']=='delete'){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$obj->deleteData('user',$condition_arr);
}

$result=$obj->getData('user','*','','id','desc');

?><br/>

<a href="add.php">Add Record</a><br/>
<br/><table border="1">
	<tr>
	    <td>S.No</td>
		<td>Name</td>
		<td>Email</td>
		<td>Mobile</td>
		<td>Action</td>
	</tr>
	 
	<?php 
	if(isset($result['0'])){
		$i=1;
		foreach($result as $list){
	?>
	<tr>
	    <td><?php echo $i ?></td>
		<td><?php echo $list['name'] ?></td>
		<td><?php echo $list['email'] ?></td>
		<td><?php echo $list['mobile'] ?></td>
		<td>
		    <a href="add.php?id=<?php echo $list['id'] ?>">Edit</a>&nbsp;
			<a href="?type=delete&id=<?php echo $list['id']?>">Delete</a>
		</td>
	</tr>
	<?php 
	$i++; 
	} }else{?>
	<tr>
		<td> No Records Found</td>
	</tr>
	<?php } ?>

</table>