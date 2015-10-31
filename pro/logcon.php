<?php
session_start();
require_once'connect.php';

$username=$_POST['username'];
$pass=$_POST['pass'];
$password=md5($pass);

$_SESSION['username']= $_POST['username'];

//selecting the password from the database
$query1="select * from staff where username='".$username."'and password='".$password."' and status='staff' ";
$query2="select * from staff where username='".$username."'and password='".$password."' and status='supervisor'";
$query3="select * from staff where username='".$username."'and password='".$password."' and status='system admin'";

$result1=$conn->query($query1);
$result2=$conn->query($query2);
$result3=$conn->query($query3);


if($result3->num_rows > 0){
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: sysHome.php');
print "welcome".$_SESSION['username'];
}
elseif($result2->num_rows > 0){
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: reports.php');
print "welcome".$_SESSION['username'];
}
elseif($result1->num_rows > 0){
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: refReg.php');
print "welcome".$_SESSION['username'];
}
elseif(!$result1||!$result2||!$result3){
echo "wrong username and password";
exit;
}
else{
header("Location: index.php");
}
?>