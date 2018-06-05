<?php

function connect_to_db()
{
	$dbuser = "root";
	$dbpass = "";
	$dbname = "proiect";
	$conn = new mysqli('localhost',$dbuser, $dbpass, $dbname) or die("Unable to connect");
	return $conn;
}

function echo_povesti_pt_stergere($con)
{
	$sql="select titlu_poveste from povesti";
	$t_pov_sql=$con->query($sql);
	while($titluri_povesti=$t_pov_sql->fetch_assoc())
		echo '<option>'.$titluri_povesti['titlu_poveste'].'</option>';
	
}
function mesaj_dupa_stergere()
{
	if(isset($_COOKIE["error_on_delete"]))
	{
		echo '<html lang="ro">
			<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
			</head>
			<body>
				<p class="eroareDelete">A aparut o eroare in timpul stergerii!</p>
			</body>
			</html>';
		setcookie("error_on_delete", 1, time()-3600, '/');
	}
	if(isset($_COOKIE["succes_on_delete"]))
	{
		echo '<html lang="ro">
			<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
			</head>
			<body>
				<p class="succesDelete">Povestea selectata a fost stearsa!</p>
			</body>
			</html>';
		setcookie("succes_on_delete", 1, time()-3600, '/');
	}
}
function get_poveste_by_id($id_poveste_aleasa)
{
	$con=connect_to_db();
		$sql="select fragment from fragmente where id_poveste='$id_poveste_aleasa' and id_fragment='1'";
		$fragmente=$con->query($sql);
		while($fragment_rand=$fragmente->fetch_assoc())
			$frag=$fragment_rand['fragment'];
		return $frag;
}



?>