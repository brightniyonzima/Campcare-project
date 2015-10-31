<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view staff</title>

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
<?php
session_start();
include'connect.php';
?>
<style type="text/css">
<!--
body{
		font: 82.5% "Trebuchet MS", sans-serif;
		margin: 30px;
	}

.style1 {color: #FFFFFF}
body{background-color:#FFFFFF}
.tin{background-image:url(anim.gif)}
.container{border:solid; border-color:#CCCC99}
.menu1{background-color:#CCCC33}
.menu{font-family:"Berlin Sans FB Demi"; text-align:center}
-->
</style>
<h1 align="center"><font color="#0099FF" face="Bradley Hand ITC"><strong>CAMPCARE systems</strong></font></h1>
<?php
if(isset($_SESSION['adminname'])){
echo "<p align=right>";
echo "Hi, ".$_SESSION['adminname'];
}
else{
echo "sorry";
}
echo '&nbsp;&nbsp;<a href="logout.php">log out</a><br/>';
echo "</p>";
?>
 <div class="container" align="center">
  <!--main part-->
  <div class="menu1" align="center">
<table align="center" class="menu" cellspacing="18">
<tr><td><a href="admin.php">HOME</a></td><td><a href="staffReg.php">STAFF</a></td><td><a href="anews.php">NEW UPDATES</a></td><td><a href="notify.php">SEND MESSAGE</a></td><td><a href="help.php">A/c SETTINGS</a></td></tr>
</table>
<p align="right">
<strong>Staff details</strong><br/>
</p>
</div>

<?php
//fetching staff details from table named staff
$query=mysql_query("select * from staff");

echo "<table border=2>";
echo "<caption><b>registered staff</b></caption>";
echo "<tr><th>id</th><th>firstname</th><th>lastname</th><th>username</th><th>gender</th><th>status</th><th>d_o_b</th><th>d_o_a</th><th>residence</th><th>contact</th><th>email</th></tr>";
while($row=mysql_fetch_row($query)){
echo "<tr><td>";
echo $row[0];
echo "</td><td>";
echo $row[1];
echo "</td><td>";
echo $row[2];
echo "</td><td>";
echo $row[3];
echo "</td><td>";
echo $row[4];
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


