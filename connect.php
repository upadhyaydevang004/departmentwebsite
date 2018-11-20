<?php

$username=$_POST['user'];
$password=$_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


mysql_connect("localhost","root","");
mysql_select_db("flogin");

$result = mysql_query("select * from users where username='$username' and password='$password'") or die("Failed to query".mysql_error());
$row = mysql_fetch_array($result);

if ($row['username']==$username && $row['password']==$password) {
	echo "Login success!!!" .$row['username'];
} else {
	echo "Failed";
} 
$db='testdb';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");

echo "Great Work";


?>
