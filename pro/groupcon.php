<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>group refugee</title>

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
<?php
$zone=$_POST['zone'];
$members=$_POST['members'];
$origin=$_POST['origin'];
$person=$_GET['person'];
$group=$members.$person;

//making sure that no textboxes are left empty
echo "<p aligh=left>";
if(empty($zone) or empty($members) or empty($origin)){
echo 'No details were sent, All details are required';
echo "<form action=grouping.php>";
echo "<input type=submit value=ok>";
echo "</form>";
exit;
 } 
 
//last group number
$query="select count(reg_number) from settlement";
$result=$conn->query($query);
$n=$result;
$i=$n+1;

for($j=$i;$j<10000;$j++){
//automatic allocation of group number according to nationality
if($origin=='uganda'){
$reg="u"."/".$j;
//saving grouped families in the db
$queryx="insert into settlement values('".$reg."','".$group."','".$zone."')";
$resultx=$conn->query($queryx);
if($resultx){
echo 'data has been successfully saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
exit;
}
elseif($origin=='kenya'){
$reg="k"."/".$j;
//saving grouped families in the db
$query="insert into settlement values('".$reg."','".$group."','".$zone."')";
$result=$conn->query($query);
if($result){
echo 'data has been successfully saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
exit;
}
elseif($origin=='sudan'){
$reg="t"."/".$j;
//saving grouped families in the db
$query="insert into settlement values('".$reg."','".$group."','".$zone."')";
$result=$conn->query($query);
if($result){
echo 'data has been successfully saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
exit;
}
elseif($origin=='congo'){
$reg="c"."/".$j;
//saving grouped families in the db
$query="insert into settlement values('".$reg."','".$group."','".$zone."')";
$result=$conn->query($query);
if($result){
echo 'data has been successfully saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
exit;
}
elseif($origin=='rwanda'){
$reg="r"."/".$j;
//saving grouped families in the db
$query="insert into settlement values('".$reg."','".$group."','".$zone."')";
$result=$conn->query($query);
if($result){
echo 'data has been successfully saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
exit;
}
elseif($origin=='others'){
$reg="x"."/".$j;
//saving grouped families in the db
$query="insert into settlement values('".$reg."','".$group."','".$zone."')";
$result=$conn->query($query);
if($result){
echo 'data has been successfully saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
else{
echo 'sorry,data has not been saved';
echo '<form action=grouping.php>';
echo '<input type=submit value=ok>';
echo '</form>';
}
exit;
}
}
/*

*/
?>
