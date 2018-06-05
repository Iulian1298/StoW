<!DOCTYPE html>
<html lang="ro">
	<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
	</head>
	<body>

<?php
session_start();
if(isset($_SESSION['username']) and isset(($_COOKIE['cont_de_administrator'])))
{	//header('location: home.html');
	include '../php/functii_delete.php';
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
								<form action="search.php">
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
					<form class="formsStyle" action="../php/del_or_change.php" method="POST">
						<div id="del">
							<input type="submit" class="del_or_change" value="Sterge o poveste" name="aleg_stergere">
						</div>
						<div id="change">
							<input type="submit" class="del_or_change" value="Modifica o poveste" name="aleg_modifica">
						</div>
					</form>
				';
				if(isset($_COOKIE["aleg_stergere_cookie"])){
					echo '
					<center>
						<form action="../php/delete_form.php" method="POST">
							<div class="select-field">
								
								<select name="poveste_aleasa" id="select_f">
									<option selected hidden>Alege povestea</option>';
									echo_povesti_pt_stergere($con);
							echo'
								</select>
							</div>
							<div class="padding_butoane">
								<input type="submit" value="Delete" name="submit_del" id="del_btn">
							</div>
					</form>
					</center>';
					setcookie("aleg_stergere_cookie", 1, time()-3600, '/');}
					mesaj_dupa_stergere();
					
				
				if(isset($_COOKIE["aleg_modifica_cookie"]))
				{
					echo'
					<div class="modificare">
						<center>
							<form action="../php/set_story_to_change.php" method="POST">
								<div class="select-field">
								
									<select name="poveste_aleasa" id="select_f">
										<option selected hidden>Alege povestea</option>';
										echo_povesti_pt_stergere($con);
								echo'
									</select>
								</div>
								<div class="padding_butoane">
									<input type="submit" value="Submit" name="submit_del" id="del_btn">
								</div>
							</form>
						</center>
					</div>';
					setcookie("aleg_modifica_cookie",1,time()-3600,'/');
				}
				
				if(isset($_COOKIE["id_poveste_aleasa_pt_modificare"]))
				{
					$id_poveste_aleasa=$_COOKIE["id_poveste_aleasa_pt_modificare"];
					$poveste=get_poveste_by_id($id_poveste_aleasa);
					echo'<center>
					<form action="../php/to_disable_cookie_id_poveste_aleasa_pt_modificare_and_change_to_DB.php" method="POST">
						<div id="input_pov">
							<textarea rows="25" cols="100" name="fragment_modificat">'.$poveste.'</textarea>
						</div>
						<input type="submit" value="Modifica" name="submit_modificare" id="del_btn">
					</form></center>';
					//setcookie("id_poveste_aleasa_pt_modificare",$id_poveste_aleasa,time()-3600,'/');
				}
				
				echo'
				
						
				</div>
            </div>
			
		</div>
		<!--close main-->
	</body>
</html>';}
else
	echo '<p id="mesajErr">
			Nu esti logat, intai logheaza-te!!! <p><br>';
?>

	</body>
</html>
