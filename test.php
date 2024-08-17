<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crickfinder</title>
</head>

<body>
<div class="container">
<input type="text" name="singer" placeholder="name" class="box" required>
<input type="date" name="created" id="dob"><br>
<input type="text" name="size" placeholder="size" class="box" required>
    
      <input type='submit' name="submit" value="upload ">
    </form>
  </div>
</body>

</html>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="project";
    
    $con = mysqli_connect($server,$username,$password,$db);
    
    if(!$con)
    {
        die("connection to the database is failed due to".mysqli_connect_error());
    } 
       else{
            echo "";
            
       }
    if(isset($_POST['submit'])|| isset($_FILES['photo'])){
            $name = $_POST['name'];
            $mygender = $_POST['mygender'];
            $date = $_POST['date'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $pass = $_POST['password'];
            $photo = $_FILES['photo'];
    
            $filepath=$photo['tmp_name'];
            $filename=$photo['name'];
            $fileerror=$photo['error'];
            // print_r($photo);
    
            if($fileerror == 0){
                $destfile= 'upload/'.$filename;
                // echo "$destfile";
                move_uploaded_file($filepath,$destfile);
     
                $insert= "INSERT INTO `project`.`project` (`Name`, `Gender`, `Date of birth`, `Address`,`Mobile`, `Photo`, `password`,`Date of submit`) VALUES ('$name', '$mygender', '$date', '$address', '$mobile', '$destfile', '$pass',current_timestamp());";
                $query = mysqli_query($con,$insert);
            }
    }
    else{
        echo "";
    }
    
?>