
<?php
    include("config.php");
?>


<html>
<head>

<style>
  
  body{
                background-image: url("blue.jpg");
                background-size:cover;
          height: 16px;
                     
}

            audio{
                           
                margin-inline-end:  114vh;
                align-items: center;
                justify-content: center;
                
            }
       .bdr{
        display:grid;
        color: red;
        border: 2px solid black;
        justify-content: center;
           align-content: center;
        margin:12 21px;
          
    
       }     


</style>

    <body>
        
        <?php
?>
<?php
            $sql = "SELECT * FROM audio ORDER BY id DESC";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
        <?php
            }
            ?>       
        <?php
       
        $fetchAudio = mysqli_query($con, "SELECT * FROM audio ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchAudio)){
            
            $location = $row['location'];  
            echo "<div class= bdr >";
            echo $row["name"]."<br>"."<br>";
            echo $row["location"];
            echo "<Audio src='".$location."' controls width='100%' height='100vh'margin='100px'>";
            echo "</div>";     
        }
        ?>     
        
     
        <script>
    const audioElements = document.querySelectorAll('.bdr audio');

    audioElements.forEach(audio => {
        audio.addEventListener('play', () => {
            pauseOtherAudios(audio);
        });
    });

    function pauseOtherAudios(currentAudio) {
        audioElements.forEach(audio => {
            if (audio !== currentAudio) {
                audio.pause();
            }
        });
    }
</script>


    </body>
</head>




</html>