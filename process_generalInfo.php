<?
include "connect_wr.php";

$error = 2;

if (isset($_POST["year_select"])){
	$year = $_POST["year_select"];
}
else
{
	$error = 1; 
}
if (isset($_POST["major_select"])){
	$major = $_POST["major_select"];
}
else
{
	$error = 1; 
}
if (isset($_POST["time_select"])){
	$time = $_POST["time_select"];
}
else
{
	$error = 1; 
}
if (isset($_POST["place_select"])){
	$place = $_POST["place_select"];
}
else
{
	$error = 1; 
}
if (isset($_POST["prep_select"])){
	$prep = $_POST["prep_select"];
}
else
{
	$error = 1; 
}

if ($error == 2) {
	mysql_query("INSERT INTO `dumadb`.`meta` (
	`id` ,
	`first_name` ,
	`last_name` ,
	`user_id` ,
	`class_year` ,
	`major_type` ,
	`study_time` ,
	`study_place` ,
	`timeline`
	)
	VALUES (
	NULL , NULL , NULL , '3', '2012', 'bse', 'morning', 'library', 'weekb4'
	)") or die ("Fail Insert " mysql_error());
	}
else {
	header("location:general_info.php");
}

?>