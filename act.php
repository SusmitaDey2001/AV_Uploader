<?php

$sn="localhost";
$ur="root";
$pwd="";
$db="av_uploader";

$con=mysqli_connect($sn,$ur,$pwd,$db);

if(!$con)
{
	echo "Connection unsuccessful";
}
else
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM login WHERE username='$username'AND password='$password'";
	$result = mysqli_query($con,$sql);
	// $check = mysqli_fetch_array($result);
	$row=mysqli_fetch_array($result);
	if ($row["user_type"]=="user")
	{
		header("location:user.php") ;
	}
	
if($row["user_type"]=="admin")
	{
		
		header("location:admin.php");
		
			}
			else{
				die("connection failed:" .mysqli_connect_error());
			}
}
?>