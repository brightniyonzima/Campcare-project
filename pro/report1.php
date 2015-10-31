<?php
include 'connect.php';
?><head>
<style type="text/css">
		    ul {
font-family: Arial, Verdana;
font-size: 16px;
margin: 0;
padding: 0;
list-style: none;
}
ul li {
display: block;
position: relative;
float: left;
}
li ul {
display: none;
}
ul li a {
display: block;
text-decoration: none;
color: #ffffff;
border-top: 1px solid #ffffff;
padding: 10px 20px 10px 20px;
background: #006699;
margin-left: 1px;
white-space: nowrap;
}
ul li a:hover {
background: #617F8A;
}
li:hover ul {
display: block;
position: absolute;
}
li:hover li {
float: none;
font-size: 11px;
}
li:hover a {
background: #617F8A;
}
li:hover li a:hover {
background: #95A9B1;
}/* CSS Document */

</style>
</head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>report</title>

<link href="css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.2.custom.js"></script>
<script>
$(function(){
$( "#accordion" ).accordion();
$( "#tabs" ).tabs();
})
</script>
</head>

<div style="background-color:#3399FF">
<table class="header" height="1%" width="100%">
<tr><td align="center"><img src="images/logo.jpg" height="95" /></td></tr>
</table>
</div>
<style type="text/css">
<!--
body{
		font: 82.5% "Trebuchet MS", sans-serif;
		margin: 30px;
	}

body{background-color:#FFFFFF}
.container{border:solid; border-color:#3399FF}
.menu1{background-color:#33CCFF; text-align:justify}
.footer{background-color:#3399FF}
.mini{background-color:#3366CC}
.header{background-color:#3399FF}
a{color:#FFFFFF; font-family:"Microsoft Sans Serif"}
-->
</style>
   <div class="container" align="center">
  <!--main part-->
  <div class="menu1" align="center">
  <div class="nav" style="height:0.2%; width:100%; font-size:14px">
<ul id="drop">
      <li><a href="refReg.php">Home</a></li>
      <li><a href="">refugee</a>
        <ul>
        <li><a href="staffhome.php">check for relatives</a></li>
        <li><a href="add.php">refugee List</a></li>
        </ul>
      </li>
	   <li><a href="">group</a>
        <ul>
        <li><a href="grouping.php">group refugees</a></li>
		<li><a href="report1.php">view refugee groups</a></li>
		</ul>
      </li>
      <li><a href="home.php">help</a>
       </li>
      <li><a href="help.php">A/c settings</a>
       </li>
    </ul><br>
	</div>
</div>
<?php
session_start();

if(!isset($_SESSION['username']))
{
header("location:index.php");
}
        
		echo "<p align=right>". $_SESSION['username']. "&nbsp;&nbsp;<a href=logout.php><font color=blue>logout</font></a></b>";
		
?>
<div id="accordion">
</div>
<?php
if(isset($_GET['action'])){
	   		$action = $_GET['action'];
	   		//echo $action;
	   		switch ($action) {
	   			case 'report111':
	   				include "report111.php";
	   				break;
				default:
				include 'report1.php';
				    break;
					}
					}
            
				//fetching grouped families
$query=mysql_query("select * from settlement ORDER BY reg_number");
$join=mysql_query("SELECT settlement.reg_number,refugees.fullname,settlement.group_zone FROM settlement AS settlement LEFT JOIN refugees AS refugees ON(refugees.refugee_id=settlement.members)");

$joinz=mysql_query("SELECT settlement.reg_number AS reg_number,STUFF((SELECT ',' + settlement.group_names FROM [table-valued-function](settlement.members) members INNER JOIN members ON settlement.members=refugees.refugee_id FOR XML PATH('')),1,1,'') AS [members],settlement.zone_area AS zone_area FROM settlement AS settlement LEFT JOIN refugees AS refugees ON(refugees.refugee_id=settlement.members)");

echo "<br><table border=1>";
echo "<a href=report11.php><font color=blue>order by zone</font></a>&nbsp;&nbsp;&nbsp;";
echo "<a href=?action=report111><font color=blue>Total number of groups</font></a>";
echo '<caption><b><font color="#CC3300">united families</caption></b></caption>';
echo "<tr><th>group no.<th>group id</th><th>members</th><th>zone area</th></tr>";
$j=1;

while($row=mysql_fetch_row($query)){
echo "<tr><td>";
echo $j;
echo "</td><td>";
echo $row[0];
echo "</td><td>";
echo $row[1];
echo "</td><td>";
echo $row[2];
echo "</td></tr>";
$j++;
}
echo "</table>";

/*
while($row=mysql_fetch_row($joinz)){
echo "<tr><td>";
echo $j;
echo "</td><td>";
echo $row['group_id'];
echo "</td><td>";
echo $row['members'];
echo "</td><td>";
echo $row['zone_area'];
echo "</td></tr>";
$j++;
}
echo "</table>";
*/ 
?>
</div>