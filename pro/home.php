<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>help</title>

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
        <li><a href="add.php">add refugee to a group</a></li>
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
      <li><a href="help.php">Account</a>
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
        
		echo "<p align=right>". $_SESSION['username']. "&nbsp;&nbsp;<a href=logout.php><font color=blue>logout</font></a></b></p>";
		
?>
<p align="right"><table>
<form action="search.php" method="post">
<tr><td>Refugee:<input type="text" name="search" /></td>
<td><input type="submit" name="searchbutton" value="search" /></td></tr>
</form>
</table></p>
<strong><u>HOW TO USE THE SYSTEM</u></strong><br/>
All the functions that the system can perform are summerised within the menu above. So to navigate through the whole system, make use of the menu to go to whichever page you want to go to.<br/>
<br/>
<div id="accordion">

<h3 align="left">home</h3>
<div>This is the staff home page and it is the page where you are right now.</div>
<h3 align="left">register refugee</h3>
<div>
This item helps you incase you want to register details of a new refugee into the system.The information must match with that on the registration form given to the refugee by the authority</div>
<h3 align="left">check relatives</h3>
<div>
This menu item helps you to check for any relatives or family members that are in the settled in the camp. It helps you to produce any possible relative matches.</div>
<h3 align="left">search refugee</h3>
<div>
This page helps the staff to search about a refugee.</div>
<h3 align="left">news updates</h3>
<div>
For any new updates or information regarding refugees,this is where you can find it.</div>
<h3 align="left">send messsage</h3>
<div>
Send an email or notification to other system users.</div>
<h3 align="left">A/c SETTINGS</h3>
<div>
Use this to acquire help on how to change your user account details</div>

</div>
<?php
$time=time();
$actual_time=date('H:i:s',$time);
$date=date('Y-m-d',$time);
echo $date;
?>
</div>
<table class="footer" height="3%" width="100%">
<tr><td><h6 align="center">&copy;All rights reserved</h6></td></tr>
</table>