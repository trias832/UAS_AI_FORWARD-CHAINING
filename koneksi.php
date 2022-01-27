<?php

$conn=mysqli_connect("localhost","root","","ai_db");
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
?>