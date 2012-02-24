<?php

//Connect To Database
$hostname='p3nldg50mysql141.secureserver.net';
$username='dumaremote';
$password='kaziPap!1';
$dbname='dumaremote';


mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);


?>
