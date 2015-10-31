<head>
<?php
include 'connect.php';
?>
<head>
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
      <li><a href="reports.php">Home</a></li>
      <li><a href="">staff</a>
        <ul>
        <li><a href="staffReg.php">Register new staff</a></li>
        <br />
        </ul>
      </li>
	   <li><a href="change.php">Account</a></li>
      <li><a href="anews.php">help</a></li>
    </ul><br><br /><br />
	</div>
</div>
<?php
session_start();

if(!isset($_SESSION['username']))
{
header("location:index.php");
}
        
		echo "<p align=right>". $_SESSION['username']. "&nbsp;&nbsp;<a href=logout.php><font color=blue>logout</font></a></b></p>";
		
?>
<?php
if(isset($_GET['action'])){
	   		$action = $_GET['action'];
	   		//echo $action;
	   		switch ($action) {
	   			case 'person-detail':
	   				include "user-detail.php";
	   				break;
	   			case 'person-delete':
	   				include "person-delete.php";
	   				break;
				case 'id-order':
	   				include "id-order.php";
	   				break;
				case 'reports':
	   				include "reports.php";
	   				break;
				case 'origin-order':
	   				include "origin-order.php";
	   				break;
				case 'user-detail':
	   				include "user-detail.php";
	   				break;
				case 'user-delete':
	   				include "user-delete.php";
	   				break;
	   			default:
	   				include "reports.php";
	   				break;
	   		}
	   }
	   ?>
<br />
<p align="right"><table>
<form action="admin.php" method="post">
<tr><td>staff:<input type="text" name="search" /></td>
<td><input type="submit" name="searchbutton" value="search" /></td></tr>
</form>
</table></p>

<div id="accordion">
</div>
<p align="left">
<div id="tabs">
	<ul class="acc">
		<li><a href="#tabs-1">All refugees</a></li>
		<li><a href="#tabs-2">grouped refugees</a></li>
		<li><a href="#tabs-3">All staff</a></li>
	</ul>
	
	<div id="tabs-1">
<?php
//fetching refugee details from table refugee
$query="select * from refugees ORDER BY firstname ASC";
$result=$conn->query($query);

echo "<tr><td><a href=?action=id-order><font color=blue>order by id</font></a></td>&nbsp;&nbsp;&nbsp;<td></td>&nbsp;&nbsp;&nbsp;<td><a href=?action=origin-order><font color=blue>order by origin</font></a></td></tr>";
echo "<table border=1>";
echo '<caption><b><font color="#CC3300">LIST OF REFUGEES</font></b></caption>';
echo "<tr><th>firstname</th><th>lastname</th><th>id</th><th>gender</th><th>year of birth</th><th>origin</th><th>zone</th></tr>";
while($row=mysqli_fetch_row($result)){
echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[0]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[7]."</td><td>".$row[6]."</td><td><a href=?action=person-details&id=".$row[0]."><font color=blue>View</font></a></td>"."</td><td><a href=?action=person-delete&id=".$row[0]."><font color=blue>delete</font></a></td>"."</td></tr>";
}
echo "</table>";
?>
	</div>
	
	<div id="tabs-2">
	<?php
	//fetching grouped families
$query="select * from settlement ORDER BY reg_id";
$result=$conn->query($query);

$join="SELECT settlement.reg_id,refugees.full_name,settlement.zone FROM settlement AS settlement LEFT JOIN refugees AS refugees ON(refugees.refugee_id=settlement.group)";
$resultjoin=$conn->query($join);

echo "<table border=2>";
echo '<caption><b><font color="#CC3300">united families</caption></b></caption>';
echo "<tr><th>group id</th><th>members</th><th>zone area</th></tr>";
while($row=mysqli_fetch_row($resultjoin)){
echo "<tr><td>";
echo $row[0];
echo "</td><td>";
echo $row[1];
echo "</td><td>";
echo $row[2];
echo "</td></tr>";
}
echo "</table>";
?>
	
	</div>
	
	<div id="tabs-3">
<?php
	//fetching staff details from table named staff
$query="select * from staff ORDER BY firstname ASC";
$result=$conn->query($query);

echo "<table border=2>";
echo '<caption><b><font color="#CC3300">registered staff</caption></b></caption>';
echo "<tr><th>firstname</th><th>lastname</th><th>gender</th><th>id</th><th>status</th></th><th>d_o_a</th><th>contact</th><th>email</th></tr>";
while($row=mysqli_fetch_row($result)){
echo "<tr><td>";
echo $row[1];
echo "</td><td>";
echo $row[2];
echo "</td><td>";
echo $row[4];
echo "</td><td>";
echo $row[0];
echo "</td><td>";
echo $row[5];
echo "</td><td>";
echo $row[7];
echo "</td><td>";
echo $row[9];
echo "</td><td>";
echo $row[10];
echo "</td><td><a href=?action=user-detail&id=".$row[0]."><font color=blue>View</font></a>";
echo "</td><td><a href=?action=user-delete&id=".$row[0]."><font color=blue>delete</font></a></td></tr>";
}
echo "</table>";
?>
	</div>
	
</p>