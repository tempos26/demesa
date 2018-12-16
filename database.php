<?php

/**
 * @file
 * Connect to mysql
 */

//Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = 'root';

//Create mysqli object
//$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
 $conn = new mysqli("localhost","root","","quizzer");


//Error handler
if($conn->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
