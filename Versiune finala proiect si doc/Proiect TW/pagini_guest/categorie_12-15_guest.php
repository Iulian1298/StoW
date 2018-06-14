
<?php
session_start();
if(isset($_SESSION['username'])){
	//header('location: home.html');
	$retine_username=$_COOKIE['retine_username'];
	include'../php/functii_categorii.php';
	include("../php/conectareBD.php");
	$conn=connect_to_db();
	setcookie("categorie", "location: ../pagini_guest/categorie_12-15_guest.php", time()+3600, '/');
echo'
<!DOCTYPE html>
<html lang="ro">
	<head>
		<title> Categorie de ani intre 12 si 15 ani! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style_c2.css"/>
		<link rel="icon" type="image/jpg" href="../imagini/img.jpg"/>
	</head>
	<body>
		<div id="main">
			<div id="welcome">
				<h1>Povesti pe internet!</h1>
			</div>
			<!--close welcome-->
			<div id="menubar">
				<ul id="menu">
					<li><a href="home_guest.php">Home</a></li>
					<li><a href="categorie_5-9_guest.php">Categorie 5-9 ani</a></li>
					<li><a href="categorie_9-12_guest.php">Categorie 9-12 ani</a></li>
					<li class="current"><a href="categorie_12-15_guest.php">Categorie 12-15 ani</a></li>
					<li><a href="categorie_15-18_guest.php">Categorie 15-18 ani</a></li>

					
				</ul>
			</div>
			</div>
			<!--close menubar-->
			<div id="site_content">

				<div class="sidebar_container">
					<div class="sidebar">
						<div class="sidebar_item">
							<div class="search">
								<form action="../php/search.php">
									<input type="text" placeholder="Cauta.." name="search">
									<button type="submit"><i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<h2>Cuprins</h2><ul>';
								get_poveste_for_cuprins('Categorie 12-15 ani',$conn);
								if(isset($_COOKIE['value_buton'])){
								$valoare_buton=$_COOKIE['value_buton'];
								$titlu_si_autor=get_titlu_autor_from_db($valoare_buton,$conn);
								$titlu=$titlu_si_autor['titlu'];
								$autor=$titlu_si_autor['autor'];
								$id_fragment=get_id_fragment($valoare_buton,$conn);
								$fragment_si_id=get_ultimul_fragment_citit_si_idul_fragmentului($retine_username,$valoare_buton,$conn);
                                $fragment=$fragment_si_id['fragment'];
                                $id_fragment=$fragment_si_id['id_fragment'];
								}	
							echo'</ul><h2>Personaje</h2>';
								echo_pers($conn);
						echo'</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">';
				if(!isset($_COOKIE['value_buton']))
echo'
				<center>
					<img width="700" height="450" alt="eroare incarcare imagine" src="../imagini/adolescenti.jpg"/>
				</center>';
				else{
				echo'
					<center>
					<div id="titlu-pov">
						
						' . $titlu . ' - ' . $autor . '
					</div>
					<div id="pagini">
						<form action="../php/actiuni_butoane_categorii.php" method="POST">
							<input type="submit" value="Inceput" class="button1" name="fragment_initial">
							<input type="submit" value="Anterior" class="button1" name="fragment_anterior">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input size="3" id="fragment_cautat" type="text" name="fragment_dupa_id">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" value="Urmator" class="button1" name="fragment_urmator">
							<input type="submit" value="Final" class="button1" name="fragment_final">
						</form>
					</div>
					<div id="poveste">
					
						<p>' . utf8_encode($fragment) . '</p>	
						<center>
							<p id="nr_pagina">&nbsp;'.$id_fragment.'&nbsp;</p>
						</center>
					</div>
					</center>
					<div id="detalii_personaje">
						<div id="desc">';
							echo_detalii_personaje($conn);							
						echo'</div>
					<div>
					
				</div>';}
				echo'
				<!--close content_item-->
				
				
            </div>
                <!--close content-->	
			
		</div>
		<!--close main-->
		
	</body>
</html>';

}
else
	echo '
<!DOCTYPE html>
<html lang="ro">
	<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
	</head>
	<body>
<p id="mesajErr">
			Nu esti logat, intai logheaza-te!!! <p><br>
			
	</body>
</html>';

?>
