<?php
$id=$_GET['id'];
//deleting the person from the list
$query=mysql_query("delete from staff where staff_id='".$id."' ");
if($query){
echo 'person has been deleted';
}
else{
echo 'no one was deleted'.mysql_error();
}
exit;
?>