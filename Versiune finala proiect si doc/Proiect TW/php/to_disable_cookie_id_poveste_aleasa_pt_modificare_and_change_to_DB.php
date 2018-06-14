<?php
include 'functii_delete.php';
include("conectareBD.php");
$con=connect_to_db();
setcookie("afiseaza_text",1,time()-3600,'/');
//setcookie("id_poveste_aleasa_pt_modificare_to_verify",$id_poveste_aleasa,time()-3600,'/');
$id_poveste=$_COOKIE['id_poveste_aleasa_pt_modificare'];
if(isset($_COOKIE["id_poveste_aleasa_pt_modificare"]))
{
	
	if(isset($_COOKIE["toata_povestea"]))
	{
		$sql="delete from fragmente where id_poveste='$id_poveste'";
		$delete_povesti=$con->query($sql);
		$poveste=$_POST["fragment_modificat"];
		$nrCaracterePoveste=strlen($poveste);
		$i=0;
		$iterator=intval($nrCaracterePoveste/2500);
		while($i<$iterator)
			{$pov1=substr($poveste,$i*2500+1,2500);
			$i=$i+1;
			$incId_fragSQL = "SELECT id_fragment from fragmente where id_poveste='$id_poveste'";
			$id_fragment = $con->query($incId_fragSQL);
			$id_frag=1;
			while($row = $id_fragment->fetch_assoc()) {
				$id_frag=(int)$row["id_fragment"]+1;
			}
			$insertSQL= "insert into fragmente (fragment,id_fragment,id_poveste) values ('$pov1','$id_frag','$id_poveste')";
			$query  = mysqli_query($con,$insertSQL);
			}
		$id_frag=$id_frag+1;	
		$pov1=substr($poveste,$iterator*2500+1);
		$insertSQL= "insert into fragmente (fragment,id_fragment,id_poveste) values ('$pov1','$id_frag','$id_poveste')";
		$query  = mysqli_query($con,$insertSQL);
	}
	if(isset($_COOKIE["doar_fragment"]))
	{
		$id_fragment=$_COOKIE["doar_fragment"];
		$sql="delete from fragmente where id_poveste='$id_poveste' and id_fragment='$id_fragment'";
		$delete_povesti=$con->query($sql);
		$poveste=$_POST["fragment_modificat"];
		$insertSQL= "insert into fragmente (fragment,id_fragment,id_poveste) values ('$poveste','$id_fragment','$id_poveste')";
		$query  = mysqli_query($con,$insertSQL);
	}
}






header ('location:../pagini_admin/delete.php');
?>