<?php


function get_poveste_for_cuprins($Categorie,$conn)
{
	$sql="select titlu_poveste, autor,id_poveste from povesti where categorie='$Categorie' ";
	$result=$conn->query($sql);
	$i=1;
	echo '<form action="../php/butoncuprins.php" method="POST">';
	while($ceva=$result->fetch_assoc())
	{
		echo' <li class="Butoncup"><input class="butoncup" type="submit" value="'.$ceva['titlu_poveste'].'" name="BPoveste" ></li>';
		$i=$i+1;
	}
	echo'</form>';


}
function echo_pers($conn)
{
	if(isset($_COOKIE['value_buton'])){
		$valoare_buton=$_COOKIE['value_buton'];
		//echo $valoare_buton;
	$sql="select personaj,descriere from personaje where id_poveste='$valoare_buton'";
	$pers=$conn->query($sql);
	//echo mysqli_num_rows($pers);
	 while($personaje=$pers->fetch_assoc())
	 {
	 	$personaj=$personaje['personaj'];
	 	echo '<p class="perss">' . $personaj . ' </p>';
								
	 }
}
	else
		echo' <p class="no_value_btn">Alege o poveste!</p>';
}

function echo_detalii_personaje($conn)
{
	if(isset($_COOKIE['value_buton'])){
		$valoare_buton=$_COOKIE['value_buton'];
		//echo $valoare_buton;
	$sql="select personaj,descriere from personaje where id_poveste='$valoare_buton'";
	$pers_and_desc_sql=$conn->query($sql);
	while($pers_and_desc=$pers_and_desc_sql->fetch_assoc())
	{
		$personaj=$pers_and_desc['personaj'];
		$descriere=$pers_and_desc['descriere'];
		echo '<p id="pers">' . $personaj . ': </p>';
		echo '<p id="descriere">' . utf8_encode($descriere) . '</p>';
								
	}
}
	else
		echo' Alege o poveste!';
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
function get_ultimul_fragment_citit_si_idul_fragmentului($retine_username,$id_poveste_cautata,$con)
{
	$sql1="select id_fragment from semncarte where user='$retine_username' and id_poveste='$id_poveste_cautata'";
	$id_fragmente_sql1=$con->query($sql1);
	while($id_fragmente=$id_fragmente_sql1->fetch_assoc())
		$id_fragment=$id_fragmente['id_fragment'];
					
	$sql2="select fragment from fragmente where id_poveste='$id_poveste_cautata' and id_fragment='$id_fragment'";
	$fragmente_sql2=$con->query($sql2);
	while($fragmente=$fragmente_sql2->fetch_assoc())
		$fragment=$fragmente['fragment'];
	return compact ('fragment','id_fragment');
}



?>