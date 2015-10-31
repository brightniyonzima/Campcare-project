<?php
include'connect.php';

$sysname = $_POST['sysname'];
$syspass = $_POST['syspass'];
$change1 = $_POST['change1'];
$change2 = $_POST['change2'];

if(empty($sysname) or empty($syspass) or empty($change1) or empty($change2)){
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

//selecting a given user from the db
$query1=mysql_query("select * from staff where username='".$syspass."'");

if(!$query1){
echo 'sorry your password wasn\'t changed,please try again';
echo '<form action=syschange.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
exit;
}
else{
$query=mysql_query("update staff set pass1='".$change1."' where pass1='".$syspass."'");
echo 'Your password has been succesfully changed';
echo '<form action=index.php method=post>';
echo '<input type=submit value=ok>';
echo '</form>';
}
?>