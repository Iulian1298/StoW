<?php
session_start();
session_destroy();
//$_SESSION = [];
setcookie("cont_de_administrator", 1, time()-3600, '/');
header('location: index.php');
	
?>