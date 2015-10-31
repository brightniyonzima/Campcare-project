<?php
$id=$_GET['id'];
	//getting a person's detail from table USER using the id column
$query="select * from staff where staff_id='".$id."' ";
$result=$conn->query($query);

echo '<div id="title"><caption><font color="#660033">STAFF MEMBER\'S DETAILS</font></caption></div>';
echo '<table border=0>';
while($row=mysqli_fetch_row($result)){
echo '<tr><td><b>firstname:</b></td><td>'.$row[1].'</td></tr>';
echo '<tr><td><b>lastnname:</b></td><td>'.$row[2].'</td></tr>';
echo '<tr><td><b>gender:</b></td><td>'.$row[4].'</td></tr>';
echo '<tr><td><b>status:</b></td><td>'.$row[5].'</td></tr>';
echo '<tr><td><b>email:</b></td><td>'.$row[10].'</td></tr>';
}
echo '</table>';
exit;
?>
