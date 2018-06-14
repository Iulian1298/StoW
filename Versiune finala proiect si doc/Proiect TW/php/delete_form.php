<?php
include 'functii_delete.php';
include("conectareBD.php");
$con=connect_to_db();
if (isset($_POST["poveste_aleasa"]))
{
	$poveste_aleasa=$_POST["poveste_aleasa"];
	$sql="select id_poveste from povesti where titlu_poveste='$poveste_aleasa'";
	$id_povesti=$con->query($sql);
	while($id_poveste=$id_povesti->fetch_assoc())
		$id_pov=$id_poveste['id_poveste'];
	$sql="delete from povesti where id_poveste='$id_pov'";
	$delete_povesti=$con->query($sql);
	$sql="delete from fragmente where id_poveste='$id_pov'";
	$delete_fragmente=$con->query($sql);
	$sql="delete from personaje where id_poveste='$id_pov'";
	$delete_personaje=$con->query($sql);
	$sql="delete from semncarte where id_poveste='$id_pov'";
	$delete_semncarte=$con->query($sql);

if (isset($_POST["submit_del"])){
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_POST["poveste_aleasa"]).'.xml';
	if (!unlink($target_file))
	  {
	  setcookie("error_on_delete", 1, time()+3600, '/');
	  }
	else
	  {
	  setcookie("succes_on_delete", 1, time()+3600, '/');
	  }
	header ('location:../pagini_admin/delete.php');}
}
?>