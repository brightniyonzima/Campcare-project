<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>group refugees</title>

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
    </ul><br><br /><br />
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
<p align="left">
<strong>Enter refugee's name below to see all his/her relatives for grouping</strong> <br/>
<br/>
<table>
<form action="grouping.php" method="post">
<tr><td>FirstName:<input type="text" name="fname" /></td><td>LastName:<input type="text" name="lname" /></td>
<td><input type="submit" name="sbutton" value="search" /></td></tr>
</form>
</table>
<div align="justify">
<?php
if(isset($_POST['fname'])){ $fname = $_POST['fname']; }
if(isset($_POST['lname'])){ $lname = $_POST['lname']; }

if(empty($fname) or empty($lname)){
echo "<p align=left>";
echo 'Please fill in all the information'.mysql_error();
}
else
{

$ref = $fname." ".$lname;
$query="select * from relative where first_refugee='".$ref."' ";
$result=$conn->query($query);

echo "<p align=left>";
echo "relatives of <b>".$ref.":</b>";
echo "<ol>";
while($row=mysqli_fetch_row($result)){
echo "<li>".$row[2]." ";
$query1="select * from refugees where full_name='".$row[3]."'";
$result1=$conn->query($query1);
while($rows=mysqli_fetch_row($result1)){
echo "<b>zone:</b>"." ".$rows[6]."</li>";
}
}
echo "<ol>";
echo "</p>";
}
?>
</div>
</p>

<div id="accordion">
<caption><font color="#660033">GROUP AND ALLOCATE SETTLEMENT</font></caption>
<table height="300" width="380" align="center">
  <form id="form1" name="form1" method="post" action="groupcon.php?person=<?php $ref;?>">
    <tr><td>ZONE AREA</td><td><select name="zone"><option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option></select></td></tr>
    <tr><td>MEMBERS</td><td><textarea name="members" rows="8" cols="18" readonly="readonly">
	<?php
	
    if(isset($_POST['lname']) and isset($_POST['fname'])){
    $lname = $_POST['lname']; 
	$fname = $_POST['fname'];
	$ref = $fname." ".$lname; 
    $query="select * from relative where first_refugee='".$ref."' ";
	$result=$conn->query($query);
	while($row=mysqli_fetch_row($result)){
    	echo $row[2].",";
     }
	 }
	 else{
	 }
    ?>
	</textarea></td></tr>
    <tr><td>ORIGIN</td><td>
    <select name="origin">
	<option value="uganda">uganda</option>
	<option value="kenya">kenya</option>
	<option value="congo">congo</option>
	<option value="rwanda">rwanda</option>
	<option value="sudan">sudan</option>
	<option value="others">others</option>
	</select></td></tr>
    <tr><td></td><td><input type="submit" name="Submit" value="submit" />
    <input type="reset" name="clear" value="cancel" />
    </td></tr>
   </form>
  </table>

</div>
</div>
<table class="footer" height="0.3%" width="100%">
<tr><td align="center"><font size="-1">&copy;All rights reserved</font></td></tr>
</table>
</div>
