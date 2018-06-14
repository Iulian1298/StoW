<?php



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
function get_poveste_to_modif($id_poveste_aleasa)
{
	$frag="";
	$con=connect_to_db();
	if(isset($_COOKIE["toata_povestea"]))
	{	
		$sql="select fragment from fragmente where id_poveste='$id_poveste_aleasa'";
		$fragmente=$con->query($sql);
		while($fragment_rand=$fragmente->fetch_assoc())
			$frag=$frag . ' ' . $fragment_rand['fragment'];
		return $frag;
	}
	else
	if(isset($_COOKIE["doar_fragment"]))
	{
		$id_frag=0;
		$id_fragment=$_COOKIE["doar_fragment"];
		
		$sql="select id_fragment from fragmente where id_poveste='$id_poveste_aleasa'";
		$fragmente=$con->query($sql);
		while($fragment_rand=$fragmente->fetch_assoc())
			$id_frag=$fragment_rand['id_fragment'];
		//if(($id_fragment > $id_frag) || ($id_fragment < 1))
			//setcookie("pagina_de_modif_gresita",1,time()+3600,'/');
		//else{
			$sql="select fragment from fragmente where id_poveste='$id_poveste_aleasa' and id_fragment='$id_fragment'";
			$fragmente=$con->query($sql);
			while($fragment_rand=$fragmente->fetch_assoc())
				$frag=$fragment_rand['fragment'];
			return $frag;
			//setcookie("pagina_de_modif_gresita",1,time()-3600,'/');
			//}
	}
}




















?>