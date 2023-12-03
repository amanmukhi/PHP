<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "php";

$con = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database);

if (mysqli_connect_error()) {
	echo "<script> alert('Database Not Connected');</script>";
	exit();
}


//? --------------------- or -------------------------- 


// try {
// 	$con = new PDO("mysql:host=$mysql_db_hostname;dbname=$mysql_db_database", "$mysql_db_user", "$mysql_db_password");
// } catch (PDOExection $e) {
// 	echo $e->getMessage();
// }
