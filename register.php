<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>

        <div class="form-container">
            <form action="act1.php" method="post" name="myForm" onsubmit="return validateForm()">
                <h1>Register here</h1>
                <div class="formdesign" id="name"> <input type="text" name="username" placeholder="name" class="box" required><b> <span class="formerror"></span><br></b>
                </div>
                <div class="formdesign" id="email">
                    <input type="email" name="email" placeholder="Email" class="box"><b> <span class="formerror" required></span><br></b>
                </div>
                <div class="formdesign" id="password">
                    <input type="password" name="password" placeholder="password" class="box"><b> <span class="formerror" required></span><br></b>
                </div>
                <div class="formdesign" id="cpassword">
                    <input type="password" name="cpassword" placeholder="confirm password" class="box"><b> <span class="formerror" required></span><br></b>
                </div>
                <!-- <select name="user_type" class="box">
                    <option value="user">User</option>
                    <option value="user">Admin</option> </select><br><br> -->
                <!-- <input type="file" accept="image/jpg, image/jpeg,image/png" class="box" required><br> -->
                <input type="submit" value="register now" class="btn"><br><br>
                <p>Already have an account!? <a href="login.php">login</a>
                </p>


            </form>
        </div>
    </center>



</body>
<script src="register.js"></script>

</html>