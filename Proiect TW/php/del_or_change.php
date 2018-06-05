<?php
setcookie("id_poveste_aleasa_pt_modificare",$id_poveste_aleasa,time()-3600,'/');
if (isset($_POST["aleg_stergere"]))
setcookie("aleg_stergere_cookie", 1, time()+3600, '/');


if(isset($_POST["aleg_modifica"]))
setcookie("aleg_modifica_cookie",1,time()+3600,'/');

	header ('location:../pagini_admin/delete.php');
?>