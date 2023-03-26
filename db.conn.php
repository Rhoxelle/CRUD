<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "test";

$conn = mysqli_connect($servername, $username, $password, $dbanme);

if(!$conn){
    die("Connection Failed " . mysqli_connect_error());
}
//echo "Connected Successfully";
?>