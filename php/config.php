<?php 

// echo "Hello world :)";

// db_connect

$conn = new mysqli("localhost", "root", "", "portfolio");

if ($conn -> connect_errno) {
	echo $conn -> connect_errno();
	die("Sorry, Database Connection Failure.");
}
// else {
// 	echo "Database Connected Successfully<br>";
// }


?>