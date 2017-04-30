<?php
///*
$host="140.116.245.148";
$user="f74031051";
$password="Lifeisfun";
$database="f74031051";
//*/
/*
$host="localhost";
$user="root";
$pasword="Lifeisfun";
$database="member";
*/

$link=mysql_connect($host,$user,$password) or die ("Unable to connect!");
mysql_select_db($database, $link) or die ("Unable to select database!");

?>