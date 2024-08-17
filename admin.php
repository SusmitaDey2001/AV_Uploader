


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint"content="width=device-width,initial-scale=1.0">
        <title>A V STREAM</title>
       <style>
        *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
  } .container{
        width:100%;
        height:100vh;
        background-image: linear-gradient(rgba(0,0,0,0.3),transparent),url(Hd.jpg);
        ;background-size: cover;
        background-position: center;
        padding:0 8;
        position: relative;
 }
nav{
  display: flex ;
  width:100%;
  align-items: center;
  flex-wrap:wrap;
  padding: 5px 0;
}
.logo{
  width:120px;
  cursor:pointer;
}
.cart-icon{
  width:30px;
  cursor:pointer;
}
nav ul{
  flex: 1;
  text-align: right;
  padding-right: 30px;
}
nav ul li{
  display:inline-block;
  list-style:none;
  margin: 10px 30px;
}
nav ul li a{
  color:#f8f4f4;
  text-decoration: none;
  position: relative;
}
nav ul li a::after{
  content: '';
  width: 0%;
  height: 3px;
  position: absolute;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%);
  background:#f0eeee;
  transition:width 0.3s;
}
nav ul li a:hover::after{
  width:75%;
}
.text-box{
  color:#f3dddd;
  position:absolute;
  bottom:8%;
}
.text-box p{
  font-size: 50px;
  font-weight: 600;
}
.text-box h1{
  font-size: 190px;
  line-height: 160px;
  margin-left: -10;
  color:transparent;
  -webkit-text-stroke: 1px #fff;
  background: url("B&W.png");
  -webkit-background-clip: text; 
  background-clip: text;
  background-position: 0 0;
  animation: back 20s linear infinite;}
  @keyframes back {
    100%{
      background-position: 2000px 0;
    }
  }

  .text-box a:hover{
    color: red;
}

.text-box a:link{
    outline: 2px solid red;
}


.row{
  display:flex;
  align-items:center;
  flex-wrap: wrap;
  margin-top: 30px;
}
.text-box a{
  color:#f0eeee;
  text-decoration: none;
  padding: 10px 20px;
  margin-right:20px;
  border:2px solid #f0eeee;
}
.text-box a span{
  font-size: 30;
  line-height: 15px;
  margin-left: 5px;
}
.text-box a span{
  font-size:30px;
  line-height: 15px;
  margin-left: 5px;
}


       </style>
        </head>
        <body>
        <div class="container">
            <nav>
               
                <img src="logo.jpeg"class="logo">
                <ul>
                <li><a href="upload.php">Upload music</a></li>
                <li><a href="uploader.php">Upload videos</a></li>
                <li><a href="readvideo.php">Videos</a></li>
                <li><a href="audio.php">Audio</a></li>
                
                

</div>
                
                    
                </ul>
                <img src="cart.jpeg"class="cart-icon"> </nav>
            </nav>
            <div class="text-box">
<p>THE</p>
<h1>A.V.STREAM</h1>
<a href="index.php">Logout</a>
<div class="row">
    </div>

            </div>
        </div>
            </body>
            </html>