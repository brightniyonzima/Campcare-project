<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>check</title>

<link href="css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
<?php
session_start();
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
</script>
<script type="text/javascript" src="vali.js"></script>
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
      <li><a href="help.php">A/c settings</a>
       </li>
    </ul><br><br /><br />
	</div>
</div>
<?php
if(!isset($_SESSION['username']))
{
header("location:index.php");
}
        
		echo "<p align=right>". $_SESSION['username']. "&nbsp;&nbsp;<a href=logout.php><font color=blue>logout</font></a></b></p>";
		
?>
<div align="justify">
<?php
include('ugin.php');

$time=time();
$actual_time=date('H:i:s',$time);
$date=date('Y-m-d',$time);

//getting data from the form
 if(isset($_POST['fname'])){$fname=$_POST['fname'];}
 if(isset($_POST['lname'])){$lname=$_POST['lname'];}
 if(isset($_POST['origin'])){$origin=$_POST['origin'];}
 
 $str1 = $fname." ".$lname;
 
 $query = "select * from refugees";
 $result1 = $conn->query($query);
 
 echo '<font align=right><b>Results:</b></font><br>';
 
 while($row=mysqli_fetch_array($result1)){

 $str2 = $row[3];
 $birth = $row[5];
 
 $age = $date-$birth; //calculating the age
 
       //instantiating an object
		$dml = new DamerauLevenshtein;		
	     $similarity = $dml->similarity($str1,$str2);
		 $distance = $dml->distance($str1,$str2);			
  //displaying possible matches that are above 85%
  echo '<form name=check method=post action=save.php>';
 if($similarity >= 75 and $distance <= 10){
   echo $str2.",".$age.",".$row[7].":&nbsp;";
   echo '(similarity is '.$similarity."%&nbsp;)<input type='radio' name='namez' value='".$str2."' ><br>"; //calling method similarity to display
   //echo 'distance is '.$distance.")<br>"; //callng method distance to display
   	}
  }
  
 //matches that are less than 75%
 if($similarity <75){
   echo'<br>';
   echo 'no further possible matches found';
   }
?>
</div>
<div id="accordion">
<caption><font color="#660033">UNITE FAMILY MEMBERS</font></caption>
<table height="300" width="380" align="center">
    <tr><td><b>Refugee: </b></td><td>firstname</td><td><input type="text" name="rfname"  onkeyup="checkName(this)"/></td><td>lastname</td><td><input type="text" name="rlname" onkeyup="checkNames(this)" /></td></tr>
	 <tr><td></td><td></td><td><input type="radio" name="refGender" value="male" />male
    <input type="radio" name="refGender" value="female" />female</td><td></td><td></td></tr>
	<tr><td></td><td></td><td>relationship:
    <select name="rel">
	<option value="father">father</option>
	<option value="mother">mother</option>
	<option value="husband">husband</option>
	<option value="wife">wife</option>
	<option value="brother">brother</option>
	<option value="sister">sister</option>
	<option value="granny">granny</option>
	<option value="others">others</option>
	</select>
	</td><td>nationality:
	<select name="nation">
	<option value="uganda">uganda</option>
	<option value="kenya">kenya</option>
	<option value="tz">tanzania</option>
	<option value="rwanda">rwanda</option>
	<option value="congo">congo</option>
	<option value="others">others</option>
	</select>
	</td><td></td></tr>
    <tr><td></td><td></td><td><input type="submit" name="Submit" value="save" />
                     <input type="reset" name="clear" value="cancel" />
    </td><td></td><td></td></tr>
   </form>
</table>
<ol>
<li>Use the found results and then group the relatives together.</li>
<li>Make sure you first confirm with the refugee that's searching for relative.</li>
</ol>
</div>
<table class="footer" height="1.1%" width="100%">
<tr><td align="center">&copy;All rights reserved</td></tr>
</table>
</div>
