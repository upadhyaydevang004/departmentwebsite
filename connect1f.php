<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login_formf";


$Email1=$_POST['Email1'];
$Password1=$_POST['Password1'];

$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) {
	 die("Connection failed:" .$conn->connect_error);

} 


if(empty($Email1)) {
	echo "Email cannot be blank";
	die();
}

if(empty($Password1)) {
	echo "Password cannot be blank";
	die();
}

$sql="select * from logf where Password='$Password1' AND Email='$Email1'";

$run_c=mysqli_query($conn,$sql);
			
			$check_customer=mysqli_num_rows($run_c);
			
			if($check_customer==0)
				
				{
					
					echo "<script>alert('Email or Password Is Incorrect, Please Try Again')</script>";
					exit();
				}
			if($check_customer>0){
				
			$_SESSION['Email1']=$Email1;
			
				echo "<script>alert('Logged In Successfully')</script>";
			
				echo"<script>window.open('indexf.html','_self')</script>";
			}
			
			else{
				
				$_SESSION['Email1']=$Email1;
			
				echo "<script>alert('Successfully not Logged In')</script>";
			
				echo"<script>window.open('finformf.html','_self')</script>";
			}
		
if ($conn->query($sql)==TRUE) {
	echo "Thank you, Your inputs have been entered";
}else {
	echo "Error".$sql."<br>".$conn->error;
}

$conn->close();

?>