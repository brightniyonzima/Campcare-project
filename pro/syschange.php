<head>
<?php
include 'connect.php';
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>change</title>

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
<div id="accordion">
</div>
<table align="center">
<caption><strong><font color="#FF6600">CHANGE PASSWORD</font></strong></caption>
<form action="syschangecon.php" method="post" >
<tr><td>username:</td><td width="50"><input type="text" name="sysname" /></td></tr>
<tr><td>current password:</td><td width="50"><input type="password" name="syspass" /></td></tr>
<tr><td>new password:</td><td width="50"><input type="password" name="change1" /></td></tr>
<tr><td>re_enter password:</td><td width="50"><input type="password" name="change2" /></td></tr>
<tr><td></td><td><input type="submit" name="sub" value="send" /> &nbsp; <input type="reset" name="no" value="cancel" /></td></tr>
</form>
     </table>
<table class="footer" height="5%" width="100%" align="center">
<tr><td align="center">&copy;All rights reserved</td></tr>
</table>