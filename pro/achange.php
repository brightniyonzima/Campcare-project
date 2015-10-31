<?php
include'connect.php';

$supername = $_POST['supername'];
$superpass = $_POST['superpass'];
$superpassword = md5($superpassword);
$change1 = $_POST['change1'];
$change2 = $_POST['change2'];

if(empty($supername) or empty($superpass) or empty($change1) or empty($change2)){
echo 'please make sure that you fill all the details';
echo "<form action=change.php>";
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

//selecting a given user from the db
$query1=mysql_query("select * from user where username='".$superpassword."'");

if(!$query1){
echo 'sorry your password wasn\'t changed,please try again';
echo '<form action=help.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
exit;
}
else{
$change=md5(change1);
$query=mysql_query("update user set pass1='".$change."' where pass1='".$superpassword."'");
echo 'Your password has been succesfully changed';
echo '<form action=index.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
}
?>