<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FACULTY  SELECTION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <br><br>
  <!--
  <form  align="right" >
    <button onclick="window.location.href='facinfo.html'" type="button" class="btn btn-info" >Faculty Information</button>
  </form>
  -->
  <form action="fs.php" method="post" enctype="multipart/form-data">
  <h2>FACULTY SELECTION PROCESS</h2>
   <br><br>         
    Faculty Incharge
         	
    
          <select name="teach1" >
          <option>Mrs.Jeyasudha Martin</a></option>
          <option>Mr. C Arun</a></option>
          <option>Mr. Senthil Kumar</a></option>
        </select>
		
       
        	
  			<select name="teach2">
          
          <option>Mrs.Jeyasudha Martin</a></option>
          <option>Mr. C Arun</a></option>
          <option>Mr. Senthil Kumar</a></option>
        </select>
			
        	<!--
  			<select type="text" name="teach3" value="">
    			<!--<option><a href="#">Select</a></option>
    			<option value="J"><a href="#">Mrs. Jeyasudha Martin</a></option>
    			<option value="A"><a href="#">Mr. C Arun</a></option>
    			<option value="S"><a href="#">Mr. Senthil Kumar</a></option>
  			</select>
			-->

<input type="Submit" name="Submit">

</form>
</body>
</html>

<?php

if(isset($_POST['Submit'])){
  
$teach1=$_POST['teach1'];
$teach2=$_POST['teach2'];

$insert_c="insert into teachers(teacher1,teacher2) values('$teach1','$teach2')";

$run_c=mysqli_query($con,$insert_c);

echo"<script>window.open('fs.php',_self)</script>";
}


?>
