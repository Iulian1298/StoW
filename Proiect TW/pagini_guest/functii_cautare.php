<?php

function connect_to_db()
{
	$dbuser = "root";
	$dbpass = "";
	$dbname = "proiect";
	$conn = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");
	return $conn;
}

function get_titlu_autor_from_db($id_poveste_cautata,$con)
{
	$sql="select titlu_poveste from povesti where id_poveste='$id_poveste_cautata'";
	$titluri_sql=$con->query($sql);
	while($titluri=$titluri_sql->fetch_assoc())
		$titlu=$titluri['titlu_poveste'];
	$sql="select autor from povesti where id_poveste='$id_poveste_cautata'";
	$autori_sql=$con->query($sql);
	while($autori=$autori_sql->fetch_assoc())
		$autor=$autori['autor'];
	return compact('titlu','autor');
}
function get_id_fragment($id_poveste_cautata,$con)
{
	$id_fragment=1;
	$sql="select id_fragment from fragmente where id_poveste='$id_poveste_cautata'";
	$id_fragmente_sql=$con->query($sql);
	while($id_fragmente=$id_fragmente_sql->fetch_assoc())
		if($id_fragmente['id_fragment']>$id_fragment)
			$id_fragment=$id_fragmente['id_fragment'];
	return $id_fragment;
}
function get_ultimul_fragment_citit($retine_username,$id_poveste_cautata,$con)
{
	$sql1="select id_fragment from semncarte where user='$retine_username' and id_poveste='$id_poveste_cautata'";
	$id_fragmente_sql1=$con->query($sql1);
	while($id_fragmente=$id_fragmente_sql1->fetch_assoc())
		$id_fragment=$id_fragmente['id_fragment'];
					
	$sql2="select fragment from fragmente where id_poveste='$id_poveste_cautata' and id_fragment='$id_fragment'";
	$fragmente_sql2=$con->query($sql2);
	while($fragmente=$fragmente_sql2->fetch_assoc())
		$fragment=$fragmente['fragment'];
	return $fragment;
}
function echo_pers_desc($id_poveste_cautata,$con)
{
	$sql="select personaj,descriere from personaje where id_poveste='$id_poveste_cautata'";
	$pers_and_desc_sql=$con->query($sql);
	while($pers_and_desc=$pers_and_desc_sql->fetch_assoc())
	{
		$personaj=$pers_and_desc['personaj'];
		$descriere=$pers_and_desc['descriere'];
		echo '<p class="pers">' . $personaj . ': </p>';
		echo '<p class="descriere">' . utf8_encode($descriere) . '</p>';
								
	}
}




?>