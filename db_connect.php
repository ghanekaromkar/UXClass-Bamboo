<?php
//Connections Parameters
$db_host="localhost";
$db_name="dataviz";
$username="root";
$password="";
$db_con=mysql_connect($db_host,$username,$password);
if(!$db_con){
	die('Connection error:'.mysql_error());
}
$connection_string=mysql_select_db($db_name);
?>