<!DOCTYPE html>
<html lang="ro">
	<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
	</head>
	<body>

<?php
session_start();
if(isset($_SESSION['username']))
{
	//header('location: home.html');
echo'
<!DOCTYPE html>
<html>
	<head>
		<title> Incarca poveste! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="../css/load.css"/>
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

					<li  class="current"><a href="load_admin.php">Incarca o poveste</a></li>
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
						
							<a id="A" href="home_guest.php"  title="Home">
							<img width="18" height="18" alt="Eroare incarcare imagine" src="../imagini/img_home.jpg"/>
							<a/>
							<a id="home" href="home_guest.php">Home</a>
							
							
							


						</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">
					<form action="../php/upload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="Upload file" name="submit">';
						
						
							if(isset(($_COOKIE['mesaj_eroare_nu_este_fisier_XML'])))
							{
								echo '<p class="eroareAdaugareXML">Fisierul ales nu este XML, te rog adauga un fisier XML!</p>';
								setcookie("mesaj_eroare_nu_este_fisier_XML", 1, time()-3600, '/');
							}
							if(isset(($_COOKIE['mesaj_eroare_fisier_existent'])))
							{
								echo '<p class="eroareAdaugareXML">Fisierul ales a fost deja adaugat!</p>';
								setcookie("mesaj_eroare_fisier_existent", 1, time()-3600, '/');
							}
							if(isset(($_COOKIE['adaugare_reusita'])))
							{
								echo '<p class="succesAdd">Fisierul a fost adaugat cu succes!</p>';
								setcookie("adaugare_reusita", 1, time()-3600, '/');
							}
			echo '
					</form>	
				</div>
            </div>
                <!--close content-->	
			
		</div>
		<!--close main-->
	</body>
</html>';
}
else
	echo '<p id="mesajErr">
			Nu esti logat, intai logheaza-te!!! <p><br>';
?>
	</body>
</html>
