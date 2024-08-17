<?php
$sn="localhost";
$ur="root";
$pwd="";
$db="av_uploader";

$con=mysqli_connect($sn,$ur,$pwd,$db);
if(!$con)
echo" connection failed";
else{
  
  $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST['password'];

  $sql=" INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password');";
 
	
    if ($con->query($sql)===TRUE)
	{
        header('Location:login.php'); 
		echo"YOU HAVE SUCCESSFULLY  SIGNED UP INTO OUR PAGE \n THANK YOU";
	}
	else
	{
		echo"unsuccessful";
	}

  
}


?>
