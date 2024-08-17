<?php
$sn="localhost";
$ur="root";
$pwd="";
$db="AV_uploader";
$con= mysqli_connect($sn,$ur,$pwd,$db);
if(!$con){
    die("connection failed:" .mysqli_connect_error());
}
?>