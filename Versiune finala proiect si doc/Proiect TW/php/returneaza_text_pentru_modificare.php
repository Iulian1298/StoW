<?php
include 'functii_delete.php';
include("conectareBD.php");
$con=connect_to_db();
setcookie("id_poveste_aleasa_pt_modificare_to_verify",$id_poveste_aleasa,time()-3600,'/');
setcookie("afiseaza_text",1,time()+3600,'/');
if (isset($_POST["pagina_sau_poveste"]))
{
	$pagina_sau_poveste=$_POST["pagina_sau_poveste"];
	if($pagina_sau_poveste=="Toata Povestea")
	{
		setcookie("toata_povestea",1,time()+3600,'/');
		setcookie("doar_fragment",1,time()-3600,'/');
	}
	else
	{
		setcookie("toata_povestea",1,time()-3600,'/');
		setcookie("doar_fragment",$pagina_sau_poveste,time()+3600,'/');
	}
}
header ('location:../pagini_admin/delete.php');


?>
