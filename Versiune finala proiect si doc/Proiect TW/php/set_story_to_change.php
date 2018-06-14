<?php
include 'functii_delete.php';
include("conectareBD.php");
$con=connect_to_db();
setcookie("id_poveste_aleasa_pt_modificare_to_verify",1,time()-3600,'/');
setcookie("afiseaza_text",1,time()-3600,'/');
if (isset($_POST["poveste_aleasa"]))
{
	$poveste_aleasa=$_POST["poveste_aleasa"];
	$sql="select id_poveste from povesti where titlu_poveste='$poveste_aleasa'";
	$id_povesti=$con->query($sql);
	while($id_poveste=$id_povesti->fetch_assoc())
		$id_pov=$id_poveste['id_poveste'];
	setcookie("id_poveste_aleasa_pt_modificare",$id_pov,time()+3600,'/');
	setcookie("id_poveste_aleasa_pt_modificare_to_verify",$id_pov,time()+3600,'/');

}
header ('location:../pagini_admin/delete.php');
	
	
	
?>