<!DOCTYPE html>
<html lang="ro">
	<head>
		<title> Povesti pe internet! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<link rel="icon" type="image/jpg" href="imagini/img.jpg"/>
	</head>
	<body>
			<div id="main">
				<div id="welcome">
					<h1>Povesti pe internet!</h1>
				</div>
			</div>
				
			<div id="login">
				<form name="register" method="post" action="login.php">

					<div class="container">
						<label for="uname"><b>Nume utilizator</b></label>
						<input type="text" placeholder="Introduceti numele" name="uname" required>

						<label for="psw"><b>Parola</b></label>
						<input type="password" placeholder="Introduceti Parola" name="psw" required>

						<?php
							if(isset($_COOKIE['combinatie_pas_usr_wrong']))
								echo '<p style="color: red"> Combinatie parola, username incorecta <p>';
						?>
						<button type="submit">Login</button>
						
					</div>
					
					<div class="form_row">
                    <?php
						
						echo '<p>Apasa <a href="php/creare_cont.php">aici</a> pentru a te inregistra ...</p>';
							
                    ?>
					</div>
                   

				</form>
			</div>
			
	</body>
</html>