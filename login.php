<?
session_start();

include "connect_wr.php";

// *** Validate request to login to this site.
// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$has_confirmed = 2; 
$sql="SELECT * FROM users WHERE username='$myusername'";
$result=mysql_query($sql) or die (mysql_error());
$row=mysql_fetch_array($result);
$password=$row['password'];
$id = $row['id'];
$complete = $row['has_completed'];
$has_confirmed = $row['has_confirmed'];
$cryptedPassword = md5($mypassword);

//compare password and the result
$count = 0;
if ($password == $cryptedPassword && $password != null) {$count = 1;}

// If result matched $myusername and $mypassword, set count to 1.
if($count==1 && $has_confirmed == 1)
{
	// Register $myusername, $mypassword and redirect to file "success.php"
	$_SESSION["myusername"] = $myusername;

	if ($complete == 1) {
		header("location:profile.php");
		
	}
	else{
		header("location:generalInfo.php?B$@4it=1");
	}
}
else if ($has_confirmed == 0){
	header("location:index.php?B$@4it=4");
}

else
{
	header("location:index.php?B$@4it=6");
}
?>