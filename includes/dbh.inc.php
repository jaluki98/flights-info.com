<?php 

$serverName = "rdbms.strato.de";
$dbUsername = "dbu1902762";
$dbPassword = "freddiemacandfanniemae387!";
$dbName = "dbs5405861";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}