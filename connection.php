<?php
$server="localhost";
$user="root";
$pass="";
$db="mujahid";
$conn=mysql_connect($server,$user,$pass,$db);
if(!$conn){
	die ('error in connection');
	
}
else
{
	echo"connected";
}


?>