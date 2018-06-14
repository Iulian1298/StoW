<?php
function connect_to_db()
{
	$dbuser = "root";
	$dbpass = "";
	$dbname = "proiect";
	$conn = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");
	return $conn;
}

?>