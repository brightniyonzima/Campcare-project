<?php
include'connect.php';

$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$password=md5($pass1);
$change1 = $_POST['change1'];
$change2 = $_POST['change2'];
$change=md5($change1);

if(empty($username) or empty($pass1) or empty($change1) or empty($change2)){
echo 'please make sure that you fill all the details';
echo "<form action=help.php>";
echo "<input type=submit value=ok>";
echo "</form>";
exit;
 } 
elseif($change1!==$change2){
echo 'Sorry,Passwords do not match';
echo '<form action=help.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
exit;
}

$query1="select * from staff where pass1='".$password."'";
$result1=$conn->query($query1);
if(!$result1){
echo 'sorry your password wasn\'t changed,please try again';
echo '<form action=help.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
exit;
}
else{
$query="update staff set pass1='".$change."' where pass1='".$password."'";
$result=$conn->query($query);
echo 'Your password has been succesfully changed';
echo '<form action=index.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
}
?>