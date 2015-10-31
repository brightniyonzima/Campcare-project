<?php
include 'connect.php';
$query=mysql_query("SELECT COUNT(group_names) FROM settlement");
$query1=mysql_query("SELECT COUNT(group_names) FROM settlement WHERE group_zone='A'");
$query2=mysql_query("SELECT COUNT(group_names) FROM settlement WHERE group_zone='B'");
$query3=mysql_query("SELECT COUNT(group_names) FROM settlement WHERE group_zone='C'");
$query4=mysql_query("SELECT COUNT(group_names) FROM settlement WHERE group_zone='D'");

$count=mysql_result($query,0);
$count1=mysql_result($query1,0);
$count2=mysql_result($query2,0);
$count3=mysql_result($query3,0);
$count4=mysql_result($query4,0);
if(!$query){
echo "error".mysql_error();
exit;
}
else{
echo "<p align=left>";
echo "<b>zone A:</b>".$count1."<br>";
echo "<b>zone B:</b>".$count2."<br>";
echo "<b>zone C:</b>".$count3."<br>";
echo "<b>zone D:</b>".$count4."<br>";
echo "<b>Total number of groups:</b>".$count;
}
exit;
?>