<?php 
$conn=mysqli_connect("localhost","root","","secureauth");
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}