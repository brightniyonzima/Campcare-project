<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>register staff</title>

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
$(function() {
  $( "#datepicker" ).datepicker({dateFormat : 'yy-mm-dd'});
});

$(function(){
$( "#accordion" ).accordion();
$( "#tabs" ).tabs();
})
</script>
<script type="text/javascript" src="val.js"></script>
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
<br />
<p align="right"><table>
<form action="admin.php" method="post">
<tr><td>staff:<input type="text" name="search" /></td>
<td><input type="submit" name="searchbutton" value="search" /></td></tr>
</form>
</table></p>

<div id="accordion">
<font color="#660033">REGISTER NEW STAFF</font>
<table height="340" width="380" align="center">
<form action="staffReg.php" method="post" name="staff" onsubmit="return validateForm();">
<tr><td>first name:</td><td><input type="text" name="fname" onkeyup="checkName(this)" /></td></tr>
<tr><td>last name:</td><td><input type="text" name="lname" onkeyup="checkNames(this)" /></td></tr>
<tr><td>username:</td><td><input type="text" name="username" /></td></tr>
<tr><td></td><td><input type="radio" name="gender" value="male" />male<input type="radio" name="gender" value="female"/>female</td></tr>
<tr><td>status:</td><td><select name="status" />
<option value="staff"></option>
<option value="system admin">system administrator</option></td></tr>
<tr><td>date of birth:</td><td><input type="text" name="datepicker" id="datepicker" /></td></tr>
<tr><td>date of appointment:</td><td><select name="year" />
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
</select>
<select name="month">
<option value="1">jan</option>
<option value="2">feb</option>
<option value="3">mar</option>
<option value="4">april</option>
<option value="5">may</option>
<option value="6">june</option>
<option value="7">july</option>
<option value="8">aug</option>
<option value="9">sept</option>
<option value="10">oct</option>
<option value="11">nov</option>
<option value="12">dec</option>
</select>
<select name="date"><option value="1">1</option>
<option value="2">2</option><option value="2">2</option>
<option value="3">3</option><option value="4">4</option>
<option value="5">5</option><option value="6">6</option>
<option value="7">7</option><option value="8">8</option>
<option value="9">9</option><option value="10">10</option>
<option value="11">11</option><option value="12">12</option>
<option value="13">13</option><option value="14">14</option>
<option value="15">15</option><option value="15">15</option>
<option value="16">16</option><option value="17">17</option>
<option value="18">18</option><option value="19">19</option>
<option value="20">20</option><option value="21">21</option>
<option value="22">22</option><option value="23">23</option>
<option value="24">24</option><option value="25">25</option>
<option value="26">26</option><option value="27">27</option>
<option value="28">28</option><option value="29">29</option>
<option value="30">30</option><option value="31">31</option>
</select></td></tr>
<tr><td>residence:</td><td><input type="text" name="residence" onkeyup="checkResidence(this)" /></td></tr>
<tr><td>contact:</td><td><input type="text" name="contact" onkeyup="checkInput(this)" maxlength="10"/></td></tr>
<tr><td>email:</td><td><input type="text" name="email"/></td></tr>
<tr><td>password:</td><td><input type="password" name="pass1" id="pass1" /></td></tr>
<tr><td>Re_enter password:</td><td><input type="password" name="pass2" id="pass2" /></td></tr>
<tr><td></td>
<td><input type="submit" name="submit2" value="ok" onmousedown="emptyz(this);"/>
    <input type="reset" name="reset2" value="clear" onclick="" /></td></tr>
    </form>
</table>
</div>
</div>
<table class="footer" height="5%" width="100%">
<tr><td><h6 align="center">&copy;All rights reserved</h6></td></tr>
</table>
<?php
$id=0;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['username'])){$username = $_POST['username'];}
if(isset($_POST['gender'])){ $gender = $_POST['gender']; }
if(isset($_POST['status'])){$status = $_POST['status'];}
if(isset($_POST['datepicker'])){$dob = $_POST['datepicker'];}
if(isset($_POST['year'])){$year=$_POST['year']; $month=$_POST['month']; $date=$_POST['date'];
$doa = $year."-".$month."-".$date;}
if(isset($_POST['residence'])){$residence = $_POST['residence'];}
if(isset($_POST['contact'])){$contact = $_POST['contact'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['pass1'])){$pass1 = $_POST['pass1'];}
if(isset($_POST['pass2'])){$pass2 = $_POST['pass2'];}

//making sure that no textboxes are left empty
if(empty($fname) or empty($lname) or empty($username) or empty($gender) or empty($status) or empty($dob) or empty($doa) or empty($residence) or empty($contact) or empty($email) or empty($pass1)){
echo '';
exit;
 } 
 //making sure that the passwords correspond
 elseif($pass1!==$pass2){
echo "passwords do not match".mysql_error();
echo "<form action=staffReg.php method=POST>";
echo "<input type=submit value=ok>";
echo "</form>";
exit;
}

$password=md5($pass1);
//inserting data into the table called staff
$query = "insert into staff values ('".$id."','".$fname."','".$lname."','".$username."','".$gender."','".$status."','".$dob."','".$doa."','".$residence."','".$contact."','".$email."','".$password."')";

$result=$conn->query()
if($result){
echo "New staff account has been succesfully registered for ".$username;
mysql_close($conn);
exit;
}
else{
echo "oops, some thing went wrong";
}
?>