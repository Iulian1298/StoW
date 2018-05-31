<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists

if (file_exists($target_file)) {
    $uploadOk = 0;
	setcookie("mesaj_eroare_fisier_existent", 1, time()+3600, '/');
}

// Allow certain file formats
if($FileType != "xml") {
    $uploadOk = 0;
	setcookie("mesaj_eroare_nu_este_fisier_XML", 1, time()+3600, '/');
}
 //Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
 {
	if(isset(($_COOKIE['cont_de_administrator'])))
		header("location: ../pagini_admin/load_admin.php");
	else header("location: ../pagini_guest/load_guest.php");
 //if everything is ok, try to upload file
}
 else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "0";
		if(isset(($_COOKIE['cont_de_administrator'])))
			header("location: ../pagini_admin/load_admin.php");
		else header("location: ../pagini_guest/load_guest.php");
    } 
	else {
		if(isset(($_COOKIE['cont_de_administrator'])))
			header("location: ../pagini_admin/load_admin.php");
		else header("location: ../pagini_guest/load_guest.php");
    }
 }
if($uploadOk != 0)
{
setcookie("adaugare_reusita", 1, time()+3600, '/');
$dbuser = "root";
$dbpass = "";
$dbname = "proiect";
$con = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");

$con->query("SET NAMES utf8");   
if(!$xml=simplexml_load_file($target_file)){
trigger_error('Error reading XML file',E_USER_ERROR);
}
$titlu_insert=$xml->titlu;
$autor_insert=$xml->autor;
$categorie_insert=$xml->categorie;
$personaje_insert=$xml->personaje;

$incIdSQL = "SELECT id_poveste from povesti";
$id_poveste = $con->query($incIdSQL);
$id=1;
    while($row = $id_poveste->fetch_assoc()) {
		$id=(int)$row["id_poveste"]+1;
    }
$insertSQL    = "INSERT INTO povesti (Id_poveste,Titlu_poveste, Autor, Categorie) VALUES ('$id','$titlu_insert','$autor_insert','$categorie_insert')";
$query  = mysqli_query($con,$insertSQL);

if (!$query)
    {
        echo ('Error: ' . mysqli_error($con));
    }
foreach ($xml->personaje->index as $index) 
{
	$personaj_insert=$index->personaj;
	$caracterizare_insert=$index->caracterizare;
	$insertSQL = "INSERT into personaje (Id_poveste,Personaj,Descriere) values ('$id','$personaj_insert','$caracterizare_insert')";
	$query  = mysqli_query($con,$insertSQL);

	if (!$query)
    {
        echo ('Error: ' . mysqli_error($con));
    }
}

$poveste=$xml->poveste;
$nrCaracterePoveste=strlen($poveste);
$i=0;
$iterator=intval($nrCaracterePoveste/2500);
while($i<$iterator)
	{$pov1=substr($poveste,$i*2500+1,2500);
	$i=$i+1;
	$incId_fragSQL = "SELECT id_fragment from fragmente where id_poveste='$id'";
	$id_fragment = $con->query($incId_fragSQL);
	$id_frag=1;
    while($row = $id_fragment->fetch_assoc()) {
		$id_frag=(int)$row["id_fragment"]+1;
    }
	$insertSQL= "insert into fragmente (fragment,id_fragment,id_poveste) values ('$pov1','$id_frag','$id')";
	$query  = mysqli_query($con,$insertSQL);
	
	}
$id_frag=$id_frag+1;	
$pov1=substr($poveste,$iterator*2500+1);
$insertSQL= "insert into fragmente (fragment,id_fragment,id_poveste) values ('$pov1','$id_frag','$id')";
$query  = mysqli_query($con,$insertSQL);

$id_fragment=1;
$sql="select usern from useri";
$useri_SQL=$con->query($sql);
while($randuri = $useri_SQL->fetch_assoc()) {
		$user=$randuri["usern"];
		$insertSQL="insert into semncarte (user,id_poveste,id_fragment) values ('$user','$id','$id_fragment')";
		$query  = mysqli_query($con,$insertSQL);
    }





mysqli_close($con);


}

?>