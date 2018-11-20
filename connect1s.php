<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login_form";


$Email=$_POST['Email'];
$Password=$_POST['Password'];

$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) {
	 die("Connection failed:" .$conn->connect_error);

} 


if(empty($Email)) {
	echo "Email cannot be blank";
	die();
}

if(empty($Password)) {
	echo "Password cannot be blank";
	die();
}

$sql="select * from log where Password='$Password' AND Email='$Email'";

$run_c=mysqli_query($conn,$sql);
			
			$check_customer=mysqli_num_rows($run_c);
			
			if($check_customer==0)
				
				{
					
					echo "<script>alert('Email or Password Is Incorrect, Please Try Again')</script>";
					exit();
				}
			if($check_customer>0){
				
			$_SESSION['Email']=$Email;
			
				echo "<script>alert('Logged In Successfully')</script>";
			
				echo"<script>window.open('indexs.html','_self')</script>";
			}
			
			else{
				
				$_SESSION['Email']=$Email;
			
				echo "<script>alert('Successfully not Logged In')</script>";
			
				echo"<script>window.open('finforms.html','_self')</script>";
			}
		
if ($conn->query($sql)==TRUE) {
	echo "Thank you, Your inputs have been entered";
}else {
	echo "Error".$sql."<br>".$conn->error;
}

$conn->close();

?>