<?php
session_start();

$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login_form";

$f_name=$_POST['f_name'];
$mno=$_POST['mno'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];

$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) {
	 die("Connection failed:" .$conn->connect_error);

} 

if(empty($f_name)) {
	echo "Name cannot be blank";
	die();
}

if(empty($mno)) {
	echo "Mobile number cannot be blank";
	die();
}

if(empty($Email)) {
	echo "Email cannot be blank";
	die();
}

if(empty($Password)) {
	echo "Password cannot be blank";
	die();
}

$sql="INSERT into log(Name,Mobile_Number,Email,Password) VALUES('$f_name','$mno','$Email','$Password')";

if ($conn->query($sql)==TRUE) {
	echo "Thank you, Your inputs have been entered";
}else {
	echo "Error".$sql."<br>".$conn->error;
}

$conn->close();

?>