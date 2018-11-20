<?php
session_start();
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sel_db";

$teach1=$_POST['teach1'];


$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) {
	 die("Connection failed:" .$conn->connect_error);

} 


if(empty($teach1)) {
	echo "Teacher 1 cannot be blank";
	die();
}

/*
if(empty($teach2)) {
	echo "Teacher 2 cannot be blank";
	die();
}


if(empty($teach3)) {
	echo "Teacher 3 cannot be blank";
	die();
}
*/
$sql="INSERT into teachers(teacher1) VALUES('$teach1')";

if ($conn->query($sql)==TRUE) {
	echo "Thank you, Your inputs have been entered";
}else {
	echo "Error".$sql."<br>".$conn->error;
}

$conn->close();

?>