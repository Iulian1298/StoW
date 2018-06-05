<?php
session_start();
session_destroy();
//$_SESSION = [];
setcookie("cont_de_administrator", 1, time()-3600, '/');
setcookie("retine_username", 1, time()-3600, '/');
setcookie("valoare_id_poveste", 1, time()-3600, '/');
header('location: index.php');
	
?>