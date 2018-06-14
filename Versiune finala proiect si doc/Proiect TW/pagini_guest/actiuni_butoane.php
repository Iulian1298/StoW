<?php
include 'functii_cautare.php';
include("../php/conectareBD.php");
$id_poveste_cautata=$_COOKIE['valoare_id_poveste'];
$retine_username=$_COOKIE['retine_username'];
$con=connect_to_db();

$sql="select id_fragment from fragmente where id_poveste='$id_poveste_cautata' order by id_fragment";
$id_fragmente_sql=$con->query($sql);
while($id_fragmente=$id_fragmente_sql->fetch_assoc())
		$id_fragment_final=$id_fragmente['id_fragment'];
						/*buton 'initial'*/
if (isset($_POST["fragment_initial"]))
{
	$fragment_initial= 1;
	$update_fragment="update semncarte set id_fragment='$fragment_initial' where user='$retine_username' and id_poveste='$id_poveste_cautata' order by id_fragment";
	$query  = mysqli_query($con,$update_fragment);
	header( 'location: ../pagini_guest/rezultate_cautare.php');
}
						/*buton 'final'*/
if (isset($_POST["fragment_final"]))
{	
	$fragment_final= $id_fragment_final;
	$update_fragment="update semncarte set id_fragment='$fragment_final' where user='$retine_username' and id_poveste='$id_poveste_cautata' order by id_fragment";
	$query  = mysqli_query($con,$update_fragment);
	header( 'location: ../pagini_guest/rezultate_cautare.php');
}			
						//------caut id-ul in semncarte
$sql1="select id_fragment from semncarte where user='$retine_username' and id_poveste='$id_poveste_cautata' order by id_fragment";
$id_fragmente_sql1=$con->query($sql1);
while($id_fragmente=$id_fragmente_sql1->fetch_assoc())
	$fragment_curent=$id_fragmente['id_fragment']; //retine id-ul fragmentului care trebuie afisat 
						/*buton 'next'*/
if (isset($_POST["fragment_urmator"]))
{
	if($fragment_curent!=$id_fragment_final)
	{
		$fragment_curent=$fragment_curent+1;
		$update_fragment="update semncarte set id_fragment='$fragment_curent' where user='$retine_username' and id_poveste='$id_poveste_cautata' order by id_fragment";
		$query  = mysqli_query($con,$update_fragment);
	}
	header( 'location: ../pagini_guest/rezultate_cautare.php');
}		
						/*buton 'anterior'*/
if (isset($_POST["fragment_anterior"]))
{
	if($fragment_curent!=1)
	{
		$fragment_curent=$fragment_curent-1;
		$update_fragment="update semncarte set id_fragment='$fragment_curent' where user='$retine_username' and id_poveste='$id_poveste_cautata' order by id_fragment";
		$query  = mysqli_query($con,$update_fragment);
	}
	header( 'location: ../pagini_guest/rezultate_cautare.php');
}
						/*cautare fragment dupa nr paginii*/
if (isset($_POST["fragment_dupa_id"]))
{
	$fragment_curent=$_POST["fragment_dupa_id"];
	if($fragment_curent>0 and $fragment_curent<=$id_fragment_final)
	{	$update_fragment="update semncarte set id_fragment='$fragment_curent' where user='$retine_username' and id_poveste='$id_poveste_cautata' order by id_fragment";
		$query  = mysqli_query($con,$update_fragment);
	}
	header( 'location: ../pagini_guest/rezultate_cautare.php');
	}
?>