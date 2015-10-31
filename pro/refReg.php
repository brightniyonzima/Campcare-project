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
<script type="text/javascript" src="val1.js"></script>
</head>
<div style="background-color:#3399FF">
<table class="header" height="1.1%" width="100%">
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
        <li><a href="add.php">Refugee list</a></li>
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
<br />
<div id="accordion">
<caption><font color="#660033">ENTER REFUGEE DETAILS</font></caption>
<table height="300" width="380" align="center">
 <form id="form1" name="form1" method="post" action="refcon.php">
<tr><td>first name:</td><td><input type="text" name="fname" onkeyup="checkName(this)" /></td></tr>
<tr><td>last name:</td><td><input type="text" name="lname" onkeyup="checkNames(this)" /></td></tr>
<tr><td></td><td><input type="radio" name="gender" value="male" />male<input type="radio" name="gender" value="female"/>female</td></tr>
<tr><td>year of birth:</td><td><input type="text" name="dob" onkeyup="checkInput(this)" /></td></tr>
<tr><td>origin:</td><td><input type="text" name="origin" /></td></tr>
<tr><td>zone:</td><td><select name="zone"><option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option></select></td></tr>
<tr><td></td><td><input type="submit" name="send" value="send" />
<input type="reset" name="reset3" value="clear" /></td></tr>
  </form>
  </table>
<ol>
<li>Please make sure that the refugee provides you with an ID or any paper for identification.</li>
<li>Also make sure that person being registered has not been registered before.</li>
</ol>

</div>
</div>
<table class="footer" height="5%" width="100%">
<tr><td><h6 align="center">&copy;All rights reserved</h6></td></tr>
</table>
