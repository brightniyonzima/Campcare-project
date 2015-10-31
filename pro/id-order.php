<?php
//fetching refugee details from table refugee
$query=mysql_query("select * from refugees order by ref_id");

echo "<tr><td><a href=?action=id-order><font color=blue>order by id</font></a></td>&nbsp;&nbsp;&nbsp;<td></td>&nbsp;&nbsp;&nbsp;<td><a href=?action=origin-order><font color=blue>order by origin</font></a></td></tr>";
echo "<table border=2>";
echo '<caption><b><font color="#CC3300">refugee details</caption></b></caption>';
echo "<tr><th>id</th><th>firstname</th><th>lastname</th><th>gender</th><th>year of birth</th><th>origin</th><th>zone</th></tr>";
while($row=mysql_fetch_row($query)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[7]."</td><td>".$row[6]."</td><td><a href=?action=person-details&id=".$row[0]."><font color=blue>View</font></a></td>"."</td><td><a href=?action=person-delete&id=".$row[0]."><font color=blue>delete</font></a></td>"."</td></tr>";
}
echo "</table>";
exit;
?>