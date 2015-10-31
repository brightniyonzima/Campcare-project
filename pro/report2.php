<head>
<?php
include 'connect.php';
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>report</title>
<script type="text/javascript" src="ask.js">
</script>
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
.menu1{background-color:#003366}
.footer{background-color:#3399FF}
.mini{background-color:#3366CC}
.header{background-color:#3399FF}
a{color:#FFFFFF; font-family:"Microsoft Sans Serif"}
-->
</style>

  <div class="container" align="center">
  <!--main part-->
  <div class="menu1" align="center" style="height:8%; width:28%">
  <table align="left" class="menu" cellspacing="18">
<tr><td><a href="sysHome.php">HOME</a></td><td><a href="report2.php">REPORTS</a></td><td><a href="syschange.php">A/c SETTINGS</a></td></tr>
</table>
</div>
<?php
session_start();

if(!isset($_SESSION['username']))
{
header("location:index.php");
}
        
		echo "<p align=right>". $_SESSION['username']. "&nbsp;&nbsp;<a href=logout.php><font color=blue>logout</font></a></b>";
		
?>
<?php
if(isset($_GET['action'])){
	   		$action = $_GET['action'];
	   		//echo $action;
	   		switch ($action) {
	   			case 'user-detail':
	   				include "user-detail.php";
	   				break;
	   			case 'user-delete':
	   				include "user-delete.php";
	   				break;
	   			default:
	   				include "report2.php";
	   				break;
	   		}
	   }
	   ?>
<div id="accordion">
</div>
<p align="left">
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">All staff</a></li>
		<li><a href="#tabs-2">All supervisors</a></li>
		<li><a href="#tabs-4">Audit trial</a></li>
	</ul>
	
	<div id="tabs-1">
	<?php
	//fetching staff details from table named staff
$query1="select * from staff";
$result1=$conn->query($query1);

echo "<table border=2>";
echo '<caption><b><font color="#CC3300">registered staff</caption></b></caption>';
echo "<tr><th>id</th><th>firstname</th><th>lastname</th><th>gender</th><th>status</th></th><th>d_o_a</th><th>contact</th><th>email</th></tr>";
while($row=mysqli_fetch_row($result1)){
echo "<tr><td>";
echo $row[0];
echo "</td><td>";
echo $row[1];
echo "</td><td>";
echo $row[2];
echo "</td><td>";
echo $row[4];
echo "</td><td>";
echo $row[5];
echo "</td><td>";
echo $row[7];
echo "</td><td>";
echo $row[9];
echo "</td><td>";
echo $row[10];
echo "</td><td><a onClick=elavate() href=supcon.php?&id=".$row[0]."><font color=brown>ETS</font></a>";
echo "</td><td><a href=?action=user-detail&id=".$row[0]."><font color=blue>View</font></a>";
echo "</td><td><a onClick=deleting() href=?action=user-delete&id=".$row[0]."><font color=blue>delete</font></a></td></tr>";
}
echo "</table>";
?>
	</div>
	
	<div id="tabs-2">
	<?php
	//fetching supervisors details from table refugee
$querys="select * from staff where status='staff' ORDER BY firstname ASC";
$results=$conn->query($querys);

echo "<table border=2>";
echo '<caption><b><font color="#CC3300">supervisors</caption></b></caption>';
echo "<tr><th>firstname</th><th>lastname</th><th>gender</th><th>id</th><th>status</th><th>d_o_b</th><th>d_o_a</th><th>residence</th><th>contact</th><th>email</th></tr>";
while($row=mysqli_fetch_row($results)){
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
echo $row[6];
echo "</td><td>";
echo $row[7];
echo "</td><td>";
echo $row[8];
echo "</td><td>";
echo $row[9];
echo "</td><td>";
echo $row[10];
echo "</td></tr>";
}
echo "</table>";
?>
	</div>
	
	<div id="tabs-4">
	</div>
</p>
<table class="footer" height="5%" width="100%" align="center">
<tr><td align="center">&copy;All rights reserved</td></tr>
</table>