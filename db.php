<?php

$con=mysqli_connect("localhost","root","","sel_db");

if(mysqli_connect_errno())
{
	
	echo"failed to connect to MySql: " . mysqli_connect_error();
}
?>