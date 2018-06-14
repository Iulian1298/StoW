<?php
session_start();

/* Set oracle user login and password info */
$dbuser = "root";
$dbpass = "";
$dbname = "proiect";
$conn = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");

if (!$conn)  {
    $e = oci_error();   // For oci_connect errors do not pass a handle
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
    exit; 
}


$user = $_POST['uname'];
$pass = $_POST['psw'];


$query ="SELECT * FROM useri WHERE usern='$user' AND psw='$pass'";
$results =mysqli_query($conn,$query);
if (mysqli_num_rows($results) == 1) {
	  setcookie('retine_username', $user, time()+3600, '/');
  	  $_SESSION['username'] = $user;
  	  $_SESSION['success'] = "You are now logged in ";
	  $query_1="select * from useri where usern='$user' AND psw='$pass' and admin='1'";
	  $result_1 = mysqli_query($conn,$query_1);
	  if(mysqli_num_rows($result_1) == 1){
		  header('location: pagini_admin/home_admin.php');
		  setcookie("cont_de_administrator", 1, time()+3600, '/');
	  }
	  else {
		  header('location: pagini_guest/home_guest.php');
	  }
		
  	}else {
		setcookie('combinatie_pas_usr_wrong',1, time()+2, '/');
		header('location: index.php');
		
  	}


?>
