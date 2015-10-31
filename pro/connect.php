<?php
/*
$con=mysqli_connect("localhost","root","");
if($con){
mysqli_select_db("dbase",$con);
}
else
{
die("sorry,could not connect".mysql_error());
}
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbase="dbase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//mysqli_select_db($conn,"dbase");
?>