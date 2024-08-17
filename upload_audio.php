<!DOCTYPE html>
<html>
<head>
  
  
  <style>
   
   
.container{
  display: flex;
  align-content: center;
 justify-content:  center;
    color:wheat ;
  margin: 358px auto;
}
body{
      display: flex;
      justify-content:center;
  background-color:darkcyan ;
    

    }
    input{
 border: 2px solid black;
      border-radius: 20px;
      font-size: 2rem;
      
    }
  </style>
  <?php
  
  include("config.php");
  
  if(isset($_POST['A_upload'])){
    $maxsize=9999999999;


    $name=$_FILES['file']['name'];
    $target_dir="audios/";
    $target_file=$target_dir . $_FILES['file']['name'];
   
    $audioFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  $extension_arr= array("mp3");
    
          if(in_array($audioFileType,$extension_arr))
          {
            if(($_FILES['file'] ['size'] >= $maxsize) || ($_FILES["file"] ['size']==0)){
              echo "large file.";
            }else
            {
              if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file))
              {
                $query=  "INSERT INTO audio(name,location) VALUES('".$name."','".$target_file."')";
                
                mysqli_query($con,$query);
                echo "successful";
              }
            }

            
          }else{
            echo "invalid fe";
          }
    
  }
  
  ?>
</head>
<body>
  <div class="container">

    <form action="" method="post" enctype="multipart/form-data">
      <input type='file' name='file'>
      <input type='submit' name="A_upload" value="upload audio/">
    </form>
  </div>

  
</body>
</html>