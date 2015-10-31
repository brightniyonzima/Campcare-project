<?php
$id=$_GET['id'];
	//getting a person's detail from table refugees using the id column
$query=mysql_query("select * from refugees where ref_id='".$id."' ");

echo '<div id="title"><caption><font color="#660033">PERSON\'S DETAILS</font></caption></div>';
echo '<table border=0>';
while($row=mysql_fetch_row($query)){
echo '<tr><td><b>firstname:</b></td><td>'.$row[1].'</td></tr>';
echo '<tr><td><b>lastnname:</b></td><td>'.$row[2].'</td></tr>';
echo '<tr><td><b>gender:</b></td><td>'.$row[4].'</td></tr>';
echo '<tr><td><b>origin:</b></td><td>'.$row[7].'</td></tr>';
echo '<tr><td><b>zone:</b></td><td>'.$row[6].'</td></tr>';
}
echo '</table>';
exit;
?>
