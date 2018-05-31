<?php

$dbuser = "root";
$dbpass = "";
$dbname = "proiect";
$con = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");



if(!$xml=simplexml_load_file('Cartea junglei.xml')){
trigger_error('Error reading XML file',E_USER_ERROR);
}
$titlu_insert=$xml->titlu;
$autor_insert=$xml->autor;
$personaje_insert=$xml->personaje;
echo $titlu_insert . "<br>";
echo $autor_insert . "<br>";  

$incIdSQL = "SELECT id_poveste from povesti";
$id_poveste = $con->query($incIdSQL);

    while($row = $id_poveste->fetch_assoc()) {
		$id=(int)$row["id_poveste"]+1;
    }
echo $id . "<br>";
$insertSQL    = "INSERT INTO povesti (Id_poveste,Titlu_poveste, Autor) VALUES ('$id','$titlu_insert','$autor_insert')";
$query  = mysqli_query($con,$insertSQL);

if (!$query)
    {
        echo ('Error: ' . mysqli_error($con));
    }
    else 
    {
        echo "Record added";
    }

	
foreach ($xml->personaje->index as $index) 
{
    echo $index . "<br>"; 
	

    /*$sql    = "INSERT INTO test (w1, w2) VALUES ('$w1','$w2')";
    $query  = mysqli_query($con,$sql);

    if (!$query)
    {
        echo ('Error: ' . mysqli_error($con));
    }
    else 
    {
        echo "Record added";
    }*/
}
mysqli_close($con);
?>    