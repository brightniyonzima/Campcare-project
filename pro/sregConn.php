<?php
include 'connect.php';
$id=0;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['username'])){$username = $_POST['username'];}
if(isset($_POST['gender'])){ $gender = $_POST['gender']; }
if(isset($_POST['status'])){$status = $_POST['status'];}
if(isset($_POST['dob'])){$dob = $_POST['dob'];}
if(isset($_POST['year'])){$year=$_POST['year']; $month=$_POST['month']; $date=$_POST['date'];
$doa = $year."-".$month."-".$date;}
if(isset($_POST['residence'])){$residence = $_POST['residence'];}
if(isset($_POST['contact'])){$contact = $_POST['contact'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['pass1'])){$pass1 = $_POST['pass1'];}
if(isset($_POST['pass2'])){$pass2 = $_POST['pass2'];}

//making sure that no textboxes are left empty
if(empty($fname) or empty($lname) or empty($username) or empty($gender) or empty($status) or empty($dob) or empty($doa) or empty($residence) or empty($contact) or empty($email) or empty($pass1)){
echo 'please make sure that you fill all the details';
echo "<form action=staffReg.php>";
echo "<input type=submit value=ok>";
echo "</form>";
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
if(!$query){
echo "sorry,there was a problem".mysql_error();
echo "<form action=staffReg.php method=POST>";
echo "<input type=submit value=ok>";
echo "</form>";
exit;
}
else{
echo "New staff account been succesfully registered";
echo "<form action=staffReg.php method=POST>";
echo "<input type=submit value=ok>";
echo "</form>";
mysql_close($con);

}
?>