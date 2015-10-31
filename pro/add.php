<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>register refugee</title>

<link href="css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
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
      <li><a href="refReg.php">Home</a></li>
      <li><a href="">refugee</a>
        <ul>
        <li><a href="staffhome.php">check for relatives</a></li>
        <li><a href="add.php">Refugee List</a></li>
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
    </ul><br><br /><br />
	</div>
</div>
<?php
session_start();

if(!isset($_SESSION['username']))
{
header("location:index.php");
}
        
		echo "<p align=right>". $_SESSION['username']. "&nbsp;&nbsp;<a href=logout.php><font color=blue>logout</font></a></b></p><br>";
		
?>

<strong>search for a refugee's group</strong>
<table>
<form action="add.php" method="post">
<tr><td>Refugee Name:<input type="text" name="search" /></td>
<td><input type="submit" name="searchbutton" value="search" />
<input type="reset" value="cancel" /></td></tr>
</form>
</table>

</div>
<?php
/*set varibles from form */
if(isset($_POST['search'])){$searchterm = $_POST['search'];
trim ($searchterm);
/*check if search term was entered*/
if (!$searchterm){
echo 'Please enter a search term.';
exit;
}
/*add slashes to search term*/
if (!get_magic_quotes_gpc())
{
$searchterm = addslashes($searchterm);
}

/* connects to database */
@ $dbconn = new mysqli('localhost', 'root', '', 'dbase');
if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
/*query the database*/
$query = "select * from settlement where members like '%".$searchterm."%'";
$result = $dbconn->query($query);
/*number of rows found*/
$num_results = $result->num_rows;

echo '<p>Found: '.$num_results.'</p>';
/*loops through results*/
for ($i=0; $i <$num_results; $i++)
{
$num_found = $i + 1;
$row = $result->fetch_assoc();
echo "<b>group id: </b>&nbsp;".($row['reg_number'])."<br>"."<b>members: </b>&nbsp;".($row['group_names'])."<br>"."<b>zone: </b>&nbsp;".($row['group_zone'])." <br />";
}
/*free database*/
$result->free();
$dbconn->close();
}
?>
<?php
	   if(isset($_GET['action'])){
	   		$action = $_GET['action'];
	   		//echo $action;
	   		switch ($action) {
	   			case 'person-details':
	   				include "person-details.php";
	   				break;
				case 'add':
	   				include "add.php";
	   				break;
				case 'id-order';
				    include "id-order.php";
					break;
				case 'origin-order';
				    include "origin-order.php";
					break;
				case 'person-delete';
				    include "person-delete.php";
					break;
					default:
	   				include "add.php";
	   				break;
	   		}
			}
?>
<?php
//fetching refugee details from table refugee
$query="select * from refugees order by full_name";
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

