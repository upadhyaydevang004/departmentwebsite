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
  <form  align="right" >
    <button onclick="window.location.href='facinfo.html'" type="button" class="btn btn-info" >Faculty Information</button>
  </form>
  
  <form action="facsel.php" method="post" enctype="multipart/form-data">
  <h2>FACULTY SELECTION PROCESS</h2>
   <br><br>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Subject Code</th>
        <th>Faculty Incharge</th>
         	
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td> 
        <td>SE1018-Software Artifacts</td>
        <td>
        	
        <div class="dropdown">
          <select name="teach1">
    			<option>Select</a></option>
    			<option>Mrs. S. Veena </a></option>
    			<option>Mr. Ramaraj</a></option>
    			</select>
			</div>
       
      </tr>
      <tr>
        <td>2</td>
        <td>SE1020-Software Maintenance and Administration</td>
        <td>
        	<div class="dropdown">
  			<select name="teach2">
    			<option>Select</a></option>
          <option>Mrs. B.Jyothi</a></option>
          <option>Mrs. Maheshwari</a></option>
         </select>
			</div>
        </td>
       
       </tr>
      <tr>
        <td>3</td>
        <td>SE1012-Software Design</td>
        <td>
        	<div class="dropdown">
  			<select name="teach3">
    			<option>Select</a></option>
          <option>Mr. C Arun</a></option>
          <option>Mrs. Jyoti Susan</a></option>
        </select>
			</div>
        </td>
       
      </tr>
      <tr>
        <td>4</td>
        <td>SE1023-Agile Process</td>
        <td>
          <div class="dropdown">
        <select name="teach4">
          <option>Select</a></option>
          <option>Mr. Selvakumarasamy</a></option>
          <option>Mr. Senthil Kumar</a></option>
        </select>
      </div>
        </td>
       
      </tr>
      <tr>
        <td>5</td>
        <td>SE1017-Web Programming</td>
        <td>
          <div class="dropdown">
        <select name="teach5">
          <option>Select</a></option>
          <option>Dr. G. Usha</a></option>
          <option>Mrs. M. Uma</a></option>
          </select>
      </div>
        </td>
       
      </tr>

    </tbody>

  </table>

</div>

<input type="Submit" name="Submit">


</form>
</body>
</html>

<?php

if(isset($_POST['Submit'])){
  
$teach1=$_POST['teach1'];
$teach2=$_POST['teach2'];
$teach3=$_POST['teach3'];
$teach4=$_POST['teach4'];
$teach5=$_POST['teach5'];

$insert_c="insert into teachers(teacher1,teacher2,teacher3,teacher4,teacher5) values('$teach1','$teach2','$teach3','$teach4','$teach5')";

$run_c=mysqli_query($con,$insert_c);

echo"<script>alert('Your inputs have been successfully added')</script>";
echo"<script>window.open('indexs.html','_self')</script>";
}


?>
