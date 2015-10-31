<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>index</title>

<link href="css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.2.custom.js"></script>
<script>
$(function(){
$( "#tabs" ).tabs();
})
</script>
</head>
<table class="header" height="1%" width="100%">
<tr><td align="center"><img src="images/logo.jpg" height="95" /></td></tr>
</table>
<table height="0.5%" width="100%" class="mini">
<tr><td></td></tr>
</table>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
body{background-color:#FFFFFF}
.log{font-family: "Berlin Sans FB Demi"; font-size:18px; font-weight:100}
.style1{font-family: "Berlin Sans FB Demi"}
.footer{background-color:#3399FF}
.mini{background-color:#FFCC00}
.header{background-color:#3399FF}
-->
</style>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">staff</a></li>
	</ul>
    <div id="tabs-1">
<form action="logcon.php" method ="post" name="login">
        Staff login:<br />
 		<table border="0" align="center" class="log" cellspacing="9">
      <tr><td rowspan="4" colspan="2"><img src="images/keys.jpg" width="104" height="102" /></td></tr>
	  <tr>
        <td>Username</td>
        <td><input name="username" type="text"/></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input name="pass" type="password"/></td>
      </tr>
      <tr>
        <td><input type="submit" name="login" value="Login" /></td>
        <td><input type="reset" value="cancel" /></td>
      </tr>
    </table>
	</form>
	</div>
	    <p align="center">
		<img src="anim.gif" width="230" height="220" align="middle" />
        </p>
		<table class="footer" height="0.3%" width="100%">
<tr><td align="center"><font size="-1">&copy;All rights reserved</font></td></tr>
</table>