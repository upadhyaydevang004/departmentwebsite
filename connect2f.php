<?php
session_start();

$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login_formf";

$f_name1=$_POST['f_name1'];
$mno1=$_POST['mno1'];
$Email1=$_POST['Email1'];
$Password1=$_POST['Password1'];

$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) {
	 die("Connection failed:" .$conn->connect_error);

} 

if(empty($f_name1)) {
	echo "Name cannot be blank";
	die();
}

if(empty($mno1)) {
	echo "Mobile number cannot be blank";
	die();
}

if(empty($Email1)) {
	echo "Email cannot be blank";
	die();
}

if(empty($Password1)) {
	echo "Password cannot be blank";
	die();
}

$sql="INSERT into logf(Name,Mobile_Number,Email,Password) VALUES('$f_name1','$mno1','$Email1','$Password1')";

if ($conn->query($sql)==TRUE) {
	echo "Thank you, Your inputs have been entered";
}else {
	echo "Error".$sql."<br>".$conn->error;
}

$conn->close();

?>