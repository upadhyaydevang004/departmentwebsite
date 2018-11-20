<?php

$hostname="localhost"
$user_name="root";
$password="";
$databaseName="sel_db";

$connect=mysqli_connect($hostname,$user_name,$password,$databaseName);
$query="SELECT * FROM 'teachers'";

$result1=mysqli_query($connect,$query);
$options="";
while($row1=mysqli_fetch_array($result1))
{
	$options=$options."<option>$row1[1]</option>";
}

?>