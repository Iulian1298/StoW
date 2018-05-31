<?php
$dbuser = "root";
$dbpass = "";
$dbname = "proiect";
$conn = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");

$search=$_GET['search'] ?? '';
$query= "select id_poveste from povesti where titlu_poveste='$search'";
$results =$conn->query($query);
$row=$results->fetch_assoc();
$id_poveste=(int)$row["id_poveste"];
if($id_poveste!=0)
{
	header('location: ../pagini_guest/rezultate_cautare.php');
	setcookie("valoare_id_poveste", $id_poveste, time()+3600, '/');
}
else
	if(isset(($_COOKIE['cont_de_administrator'])))
	{
		header('location: ../pagini_admin/home_admin.php');
		setcookie("cautare_fara_rezultate", 1, time()+3600, '/');
	}
	else{
		header('location: ../pagini_guest/home_guest.php');
		setcookie("cautare_fara_rezultate", 1, time()+3600, '/');
	}


?>    