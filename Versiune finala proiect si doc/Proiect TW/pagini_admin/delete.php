
<?php
session_start();
if(isset($_SESSION['username']) and isset(($_COOKIE['cont_de_administrator'])))
{	//header('location: home.html');
	include '../php/functii_delete.php';
	include("../php/delete_afisare.php");
	include("../php/conectareBD.php");
	$con=connect_to_db();
echo'
<!DOCTYPE html>
<html>
	<head>
		<title> Sterge o Poveste! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="../css/delete.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/jpg" href="imagini/img.jpg"/>
	</head>
	<body>
		<div id="main">
			<div id="welcome">
				<h1>Povesti pe internet!</h1>
			</div>
			<!--close welcome-->
			<div id="menubar">
				<ul id="menu">

					<li  class="current"><a href="delete.php">Sterge o poveste</a></li>
				</ul>
			</div>
		</div>
			<!--close menubar-->
			
						
			<div id="site_content">

				<div class="sidebar_container">
					<div class="sidebar">
						<div class="sidebar_item">
							<div class="search">
								<form action="../php/search.php" method="GET">
									<input type="text" placeholder="Cauta.." name="search">
									<button type="submit"><i class="fa fa-search"></i>
									</button>
								</form>
							</div>
						
							<a id="A" href="home_admin.php"  title="Home">
							<img width="18" height="18" alt="Eroare incarcare imagine" src="../imagini/img_home.jpg"/>
							<a/>
							<a id="home" href="home_admin.php">Home</a>
							
							
							


						</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">	
					<center>
					<form class="formsStyle" action="../php/del_or_change.php" method="POST">
						<div id="del">
							<input type="submit" class="del_or_change" value="Sterge o poveste" name="aleg_stergere">
						</div>
						<div id="change">
							<input type="submit" class="del_or_change" value="Modifica o poveste" name="aleg_modifica">
						</div>
					</form>
					</center>
				';
				
                afisare_formular_del_change($con);
				
				
				echo'
				
						
				</div>
            </div>
			
		</div>
		<!--close main-->
	</body>
</html>';}
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

