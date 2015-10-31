<?php
session_start();
include'connect.php';


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gid=$_POST['gid'];

//making sure that no textboxes are left empty
if(empty($fname) or empty($lname) or empty($gid)){
echo 'No details were sent, Please make sure that you fill in all the details';
echo "<form action=add.php>";
echo "<input type=submit value=ok>";
echo "</form>";
exit;
 } 
 
//saving data into the database
$query=mysql_query("update settlement ");

if($query){
echo 'data has been successfully saved';
echo '<form action=add.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
/*

*/
?>
