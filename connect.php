<?php
session_start();

if (isset($_SESSION['myusername']))
{
$us_name=$_SESSION['myusername'];

//Connect To Database
$hostname='p3nldg50mysql141.secureserver.net';
$username='dumaremote';
$password='kaziPap!1';
$dbname='dumaremote';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

$result = mysql_query("SELECT * FROM `users` WHERE `username` = '$us_name' LIMIT 0 , 30 ") or die (mysql_error());
$userinfo = mysql_fetch_assoc($result);
$userid = $userinfo['id']; 
$name = $userinfo['name'];
}
else
{
	header("location:index.php?B$@4it=3");
}

?>

