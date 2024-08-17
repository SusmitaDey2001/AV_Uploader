<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <style>
      body{
                background-image: url("blue.jpg");
                background-size:cover;
            }

            video{
                display: flex;

                margin-left: 20px 330px;
                
                padding: 20px;
            }
            .bdr{
                color: red;
        border-block:    3px solid black;
        justify-content: center;
           align-content: center;
        margin: 20px 30px;
          
    
    
          
    
       }     


</style>
</head>
<body>

<?php
// Include your config file here
include("config.php");

// Fetch videos from the database
$fetchVideo = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
while($row = mysqli_fetch_assoc($fetchVideo)){
    $location = $row['location'];
    $name = $row['name'];
    ?>
    <div class="video-container">
        <div class="video">
            <h3><?php echo $name; ?></h3>
            <video class="player" src="<?php echo $location; ?>" controls width="480px" height=""></video>
        </div>
    </div>
    <?php
}
?>

<script>
    const videos = document.querySelectorAll('.player');

    videos.forEach(video => {
        video.addEventListener('play', () => {
            pauseOtherVideos(video);
        });
    });

    function pauseOtherVideos(currentVideo) {
        videos.forEach(video => {
            if (video !== currentVideo) {
                video.pause();
            }
        });
    }
</script>

</body>
</html>
