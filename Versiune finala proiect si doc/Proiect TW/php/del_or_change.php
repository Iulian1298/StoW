<?php
setcookie("id_poveste_aleasa_pt_modificare",1,time()-3600,'/');
setcookie("afiseaza_text",1,time()-3600,'/');
setcookie("id_poveste_aleasa_pt_modificare_to_verify",1,time()-3600,'/');
if (isset($_POST["aleg_stergere"]))
	setcookie("aleg_stergere_cookie", 1, time()+3600, '/');


if(isset($_POST["aleg_modifica"]))
	setcookie("aleg_modifica_cookie",1,time()+3600,'/');

	header ('location:../pagini_admin/delete.php');
?>