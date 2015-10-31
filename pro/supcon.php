<?php
include 'connect.php';
$id=$_GET['id']; 
//inserting data into the table called staff
$query = mysql_query("update user set status='supervisor' where staff_id='".$id."' ");
if(!$query){
echo "sorry,there was a problem".mysql_error();
echo "<form action=sysHome.php method=POST>";
echo "<input type=submit value=ok>";
echo "</form>";
exit;
}
else{
echo "new supervisor account has been succesfully created";
echo "<form action=sysHome.php method=POST>";
echo "<input type=submit value=ok>";
echo "</form>";
mysql_close($con);

}
?>
