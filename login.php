<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
<link rel="stylesheet" href="sty.css">
</head>
<body>
    <center>

        <div class="log-container">
            <form action="act.php" method="post" enctype = "multipart/form-data">
                <h1>Login here!</h1>
                <input type="text" name="username" placeholder="name" class="box" required><br><br>
                <input type="text" name="Email" placeholder="Email" class="box" required><br><br>
                <input type="password" name="password" placeholder="password" class="box" required><br><br>
               
                <input type="submit" value="Submit" class="btn"><br><br>
                <p>Dont have an account? <a href="register.php"> Register now!</a>
                </p>        
            </form>
        </div>
    </center>
</body>
</html>