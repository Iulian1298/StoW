<?php
include'functii_categorii.php';
include("../php/conectareBD.php");
$categorie=$_COOKIE['categorie'];
$conn=connect_to_db();
$continut_buton=$_POST['BPoveste'];
$sql="select id_poveste from povesti where titlu_poveste='$continut_buton'";
$result=$conn->query($sql);
	$id_poveste=0;
	while($ceva=$result->fetch_assoc())
	{ 
		$id_poveste=$ceva['id_poveste'];
	}
	
setcookie('value_buton',$id_poveste,time()+3600,'/');
header($categorie);
 ?>