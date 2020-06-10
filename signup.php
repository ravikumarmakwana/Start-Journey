<?php include 'db.php';?>

<?php
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	$res=mysqli_query($conn,"Insert into user_info values (null,'$name','$password','$email','$phoneno','$address')");
	header("Location: index.php");
}
?>
