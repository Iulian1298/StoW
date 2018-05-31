
<?php
include 'functii_cautare.php';
session_start();
$con=connect_to_db();

if(isset($_SESSION['username']))
{
$id_poveste_cautata=$_COOKIE['valoare_id_poveste'];
$retine_username=$_COOKIE['retine_username'];
$titlu_si_autor=get_titlu_autor_from_db($id_poveste_cautata,$con);
$titlu=$titlu_si_autor['titlu'];
$autor=$titlu_si_autor['autor'];
$id_fragment=get_id_fragment($id_poveste_cautata,$con);
$fragment=get_ultimul_fragment_citit($retine_username,$id_poveste_cautata,$con);
echo'
<!DOCTYPE html>
<html>
	<head>
		<title> Rezultat Cautare! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="../css/rezultat_cautare.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

					<li  class="current"><a>Rezultat Cautare</a></li>
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

							';
							if(isset(($_COOKIE['cont_de_administrator'])))
								
								echo'
								<a id="A" href="../pagini_admin/home_admin.php"  title="Home">
								<img width="18" height="18" alt="Eroare incarcare imagine" src="../imagini/img_home.jpg"/>
								<a/>
								<a id="home" href="../pagini_admin/home_admin.php">Home</a>';

					
							else
								echo '
								<a id="A" href="home_guest.php"  title="Home">
								<img width="18" height="18" alt="Eroare incarcare imagine" src="../imagini/img_home.jpg"/>
								<a/>
								<a id="home" href="home_guest.php">Home</a>';
							
							
							

echo '
						</div>
						<!--close sidebar_item-->
							</div>
							<!--close sidebar-->
								</div>
								<!--close sidebar_container-->
			
				<div id="content">
					<div class="content_item">
				

				
				
					<center>
					<div id="titlu-pov">
						' . $titlu . ' - ' . $autor . '
					</div>
					<div id="pagini">
						<form action="actiuni_butoane.php" method="POST">
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

					</div>
				</div>
			</center>
				<div id="detalii_personaje">
					<div id="pov">
						<p>Detalii personaje ' . $titlu . ' - ' . $autor . ': </p>
					</div>
					<div id="desc">';
					echo_pers_desc($id_poveste_cautata,$con);
					echo '							
						</div>
					<div>
					
				</div>
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
