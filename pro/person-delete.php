<?php
$id=$_GET['id'];
//deleting the person from the list
$query="delete from refugees where ref_id='".$id."' ";
$result=$conn->query($query);
if($result){
echo 'person has been succesfully deleted';
}
else{
echo 'no one was deleted'.mysql_error();
}
exit;
?>