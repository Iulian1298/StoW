<?php
session_start();
if(isset($_SESSION['username']) and isset(($_COOKIE['cont_de_administrator'])))
	//header('location: home.html');
echo'
<!DOCTYPE html>
<html>
	<head>
		<title> Incarca poveste! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="css/delete.css"/>
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

					<li  class="current"><a href="load.php">Incarca o poveste</a></li>
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
						
							<a id="A" href="home_admin.php"  title="Home">
							<img width="18" height="18" alt="Eroare incarcare imagine" src="imagini/img_home.jpg"/>
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
					<!-- Select field -->
						<div class="select-field">
							<select>
								<option selected hidden>Alege povestea</option>
								<option>Alice in tara minunilor</option>
								<option>Ion</option>
								<option>Pinocchio</option>
								<option>Mara</option>
							</select>
						</div>
					<!-- close select field -->
					<br>

					<input type="submit" value="Delete" name="submit">
					
				</div>
            </div>
                <!--close content-->	
			
		</div>
		<!--close main-->
	</body>
</html>';
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
			Nu esti logat, intai logheaza-te!!! <p><br>';
?>
