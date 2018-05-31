<?php
session_start();

$pass = $_POST['pass'] ?? '';
$pass2 = $_POST['pass2'] ?? '';
$usrn = $_POST['username'] ?? '';
$name = $_POST['name'] ?? '';

if($pass=='' or $name=='' or $pass2=='' or $usrn==''){
	#echo 'TOATE CAMPURILE SUNT OBLIGATORII';
    if($name==''){
        setcookie("empty_field1", 1, time()+2, '/');
    }
	if(strcmp($pass,'')==0 and strcmp($pass2,'')==0){
		setcookie("pass_not_matching", 1, time()+2, '/');
	}else{
		if($pass==''){
			setcookie("empty_field3", 3, time()+100, '/');
		}
		if($pass2==''){
			setcookie("empty_field4", 4, time()+100, '/');
		}
	}
	if($usrn==''){
		setcookie("empty_field2",2,time()+2,'/');
	}
	
    header("location: ../creare_cont.php");
}else{
	#verificare caractere speciale
	$ok=0;
	$validation = preg_replace("/[a-zA-Z -]/", "", $name);
	if($validation != ''){
		setcookie("caractere_interzise_in_nume", 1, time()+2, '/');
		$ok=1;
	}
	$validation = preg_replace("/[a-zA-Z0-9]/", "", $pass);
	if($validation != ''){
		setcookie("caractere_interzise_in_pass1", 1, time()+2, '/');
		$ok=1;
	}
	$validation = preg_replace("/[a-zA-Z0-9]/", "", $pass2);
	if($validation != ''){
		setcookie("caractere_interzise_in_pass2", 1, time()+2, '/');
		$ok=1;
	}
	if($ok==1){
		header("location: ../creare_cont.php");
		exit;
	}
	
	#verificare numar de caractere
	$ok=0;
	if(strlen($pass)<6){
		setcookie("caractere_putine_in_pass", 1, time()+2, '/');
		$ok=1;
	}
	if($ok==1){
		header("location: ../creare_cont.php");
		exit;
	}
	
	/* verificare compatibilitate parole */
    if(strcmp($pass,$pass2)!=0){
        setcookie("pass_not_matching", 2, time()+2, '/');
		header("location: ../creare_cont.php");
		exit;
    }
	
	
	/* Stabilirea conexiunii cu baza de date */

	$dbuser = "root";
	$dbpass = "";
	$dbname = "proiect";
	$conn = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");

	if (!$conn)  {
	$e = oci_error();   // For oci_connect errors do not pass a handle
	trigger_error(htmlentities($e['message']), E_USER_ERROR);
	exit; 
	}
	
	$password=md5($pass);
	$query ="SELECT * FROM useri WHERE usern='$usrn'";
	$results =mysqli_query($conn,$query);
	if (mysqli_num_rows($results) == 0) {
  	  $_SESSION['username'] = $usrn;
  	  $_SESSION['success'] = "You are now logged in";
	  $incIdSQL = "SELECT id from useri";
	  $id_user = $conn->query($incIdSQL);
	  $id=1;
	  while($row = $id_user->fetch_assoc()) {
			$id=(int)$row["id"]+1;
		}
	  $sql="insert into useri(id,nume_complet,usern,psw,admin) values('$id','$name','$usrn','$pass','0')";
	  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
       } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
	  setcookie('retine_username', $usrn, time()+3600, '/');
  	  header('location: ../pagini_guest/home_guest.php');
  	}else {
  		setcookie("utilizator_existent",5,time()+2, '/');
		header("location: ../creare_cont.php");
  	}
	$id_fragment=1;
	$sql="select id_poveste from povesti";
	$id_SQL=$conn->query($sql);
	while($randuri = $id_SQL->fetch_assoc()) {
		$id_pov=$randuri["id_poveste"];
		$insertSQL="insert into semncarte (user,id_poveste,id_fragment) values ('$usrn','$id_pov','$id_fragment')";
		$query  = mysqli_query($conn,$insertSQL);
    }
	
	
}


?>
