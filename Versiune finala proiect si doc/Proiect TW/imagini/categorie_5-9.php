<?php
session_start();
if(isset($_SESSION['username']))
	//header('location: home.html');
echo'
<!DOCTYPE html>
<html>
	<head>
		<title> Categorie de ani intre 5 si 9 ani! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="css/style_c1.css"/>
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
					<li><a href="home.php">Home</a></li>
					<li class="current"><a href="categorie_5-9.php">Categorie 5-9 ani</a></li>
					<li><a href="categorie_9-12.php">Categorie 9-12 ani</a></li>
					<li><a href="categorie_12-15.php">Categorie 12-15 ani</a></li>
					<li><a href="categorie_15-18.php">Categoria 15-18 ani</a></li>

				</ul>
			</div>
		</div>
			<!--close menubar-->
			
						
			<div id="site_content">

				<div class="sidebar_container">
					<div class="sidebar">
						<div class="sidebar_item">
							<div class="search">
								<form action="search.php">
									<input type="text" placeholder="Cauta.." name="search">
									<button type="submit"><i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<h2>Cuprins</h2>
								<p id="titluri"><i>1. Cartea Junglei –MAXIME ROVERE</i></p>
								<p id="titluri"><i>2. Vrăjitorul din oz-LYMAN FRANK BAUM</i></p>
								<p id="titluri"><i>3. Spărgătorul de nuci – E.T.A. Hoffmann</i></p>
								<p id="titluri"><i>4. Heidi, fetița munților – Johanna Spyri</i></p>

								<p id="titluri"><i>5. Aventurile lui Robin Hood-Howard Pyle</i></p>
								<p id="titluri"><i>6. Povești – Fratii Grimm</i></p>
								<p id="titluri"><i>7.Pinnochio – Carlo Collodi</i></p>
								<p id="titluri"><i>8.Crăiasa Zăpezii – Hans Christian Andersen</i></p>
							<h2>Personaje</h2>
								<p id="personaje">Mowgli</p>
								<p id="personaje">Kaa</p>
								<p id="personaje">Tabaqui</p>
								<p id="personaje">Baloo</p>
								<p id="personaje">Akela</p>
								<p id="personaje">Rama</p>
								<p id="personaje">Bagheera</p>
								<p id="personaje">Raksha</p>
								<p id="personaje">Ikki</p>
								<p id="personaje">Shere Khan</p>
								<p id="personaje">Colonelul Hathi</p>
						</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">
					<img width="700" height="450" alt="Eroare incarcare imagine" src="imagini/copii7-10.jpg"/>
					
				</div>
				
				
				
            </div>
                <!--close content-->	
			
		</div>
		<!--close main-->
	</body>
</html>
';
else
	echo '<p style="color: red;
			font-weight: 1000;
			margin: 0;
			background: black;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-right: -50%;
			transform: translate(-50%, -50%);
			font-size: 100px;">
			You aren\'t loged in. Please log in first!!! <p><br>';
?>

