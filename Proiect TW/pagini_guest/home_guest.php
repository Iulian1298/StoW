<!DOCTYPE html>
<html lang="ro">
	<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
	</head>
	<body>

<?php
session_start();
if(isset($_SESSION['username']))
{	//header('location: home.html');
echo'
<!DOCTYPE html>


<html lang="ro">
	<head>
		<title> Povesti pe internet! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style_home.css"/>
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
					<li class="current"><a  href="home_guest.php">Home</a></li>
					<li><a href="categorie_5-9_guest.php">Categorie 5-9 ani</a></li>
					<li><a href="categorie_9-12_guest.php">Categorie 9-12 ani</a></li>
					<li><a href="categorie_12-15_guest.php">Categorie 12-15 ani</a></li>
					<li><a href="categorie_15-18_guest.php">Categorie 15-18 ani</a></li>


				</ul>
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
									</button>';
						
						
							if(isset(($_COOKIE['cautare_fara_rezultate'])))
							{
								echo '<p class="eroareCautare">Povestea nu exista, sau ati introdus gresit titlul!</p>';
								setcookie("cautare_fara_rezultate", 1, time()-3600, '/');
							}
						
			echo '
									
								</form>
							</div>
							</br>
							<a id="A" href="load_guest.php"  title="Upload">
							<img width="18" height="18" alt="Eroare incarcare imagine" src="../imagini/sageata_upload.jpg"/>
							</a>
							
							<a id="load" href="load_guest.php">Incarca o poveste</a>
							</br>
							</br>
							
							<div id="logout">
								<form name="logout" method="post" action="../logout.php">
									<button type="submit">Logout</button>
								</form>
							</div>
							</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
				
				
			<div id="content">
			
			
                <div class="content_item">
					<img id="imagine" width="400" height="290" alt="Eroare incarcare imagine" src="../imagini/home1.jpg"/>
					<p id="paragraf">
					Atunci cand vorbim despre carti, automat ne vin in cap tot soiul de povesti menite sa ne suscite interesul. 
					</p>
					<p id="paragraf_home_1">Cu totii dorim sa aflam ce se ascunde dincolo de copertile inchise, fara a ne gandi insa, la importanta si la utilitatea cartilor pe care le citim. Deja te-am facut curios, asa e? Ei bine, pentru cei mai multi dintre noi, lectura a devenit un adevarat hobby. O mica placere a vietii, pe care ne-o acordam mai des sau mai rar. Insa, daca incercam sa privim in profunzime, vom vedea ca lectura prezinta reale beneficii de care noi, cititorii, ne putem bucura pe deplin.
					</p>
					<p id="beneficii">
					Zece beneficii ale cititului:
					</p>
					<p id="paragraf_home1"> <strong id="titlu">1. O cultura generala vasta.</strong>
					Cu cat creste numarul cartilor pe care le citim, cu atat mai multe si mai variate vor fi si cunostintele dobandite.
					</p>
					<p id="paragraf_home2"> <strong id="titlu1">2. O exprimare corecta, fluenta si coerenta.</strong>
					E stiut faptul ca lectura contribuie la imbogatirea vocabularului. Asadar, citeste. Noteaza-ti pe un carnetel expresiile ori cuvintele noi. Cauta in dictionar explicatia acelor cuvinte pe care nu le intelegi, iar apoi incearca pe cat posibil sa le memorezi si sa le folosesti in discutiile ulterioare.
					</p>
					<p id="paragraf_home3"> <strong id="titlu2">3. O gandire analitica dezvoltata. </strong>
					De cele mai multe ori, cartile aduc in atentie subiecte ce pot fi abordate din mai multe unghiuri. Astfel ca, la randul nostru, invatam sa vedem lucrurile din mai multe perspective, si prin urmare, sa gasim mai usor solutiile unor probleme.
					</p>
					<p id="paragraf_home4"> <strong id="titlu3">4. O memorie mai buna.</strong>
					Majoritatea stim cat e de frustrant sa uitam ziua de nastere a vreunui prieten ori unde am pus cheile de la masina. Dar, se pare ca si pentru asta exista o solutie: cartile. Acestea stimuleaza activitatea cerebrala, imbunatatind astfel si memoria.
					</p>
					<p id="paragraf_home10"> <strong id="titlu4">5. O imaginatie bogata. </strong>
					Rolul pe care imaginatia il joaca in viata omului, este unul colosal. Imaginatia, componenta de baza a creativitatii, poate fi dezvoltata prin intermediul lecturilor , permitandu-ne in acest mod, sa evadam din realitatea coplesitoare. De asemenea, imaginatia sporeste capacitatea noastra de a anticipa si de a construi ipoteze.
					</p>
					<p id="paragraf_home5"> <strong id="titlu5">6. O sursa de informare.</strong>
					Uneori, cartile ne ofera informatii utile si sfaturi pretioase pe care le putem aplica in viata de zi cu zi. Secretul este sa alegi cartea potrivita.
					</p>
					<p id="paragraf_home6"> <strong id="titlu6">7. Relaxare.</strong>
					Din cand in cand, simtim nevoia acuta de liniste si relaxare. In acest caz, lectura este remediul perfect. Deconecteaza-te de cotidian si refugiaza-te in povestea pe care o citesti.
					</p>
					<p id="paragraf_home7"> <strong id="titlu7">8. Pot vindeca o depresie.</strong>
					In prezent, cartile sunt privite ca fiind o terapie pentru minte si suflet. Si nu spun eu asta, ci aceia care au facut cunoscuta biblioterapia. O terapie prin carti, ce ne ajuta sa reducem stresul, sa devenim mai optimisti si mai increzatori in fortele proprii.
					</p>
					<p id="paragraf_home8"> <strong id="titlu8">9. Imbunatateste relatiile interpersonale.</strong>
					Atunci cand citim, de obicei, ne regasim in unul din personajele acelei carti. Si, nu de putine ori, ajungem sa comparam trairile si experientele personajului nostru preferat, cu propriile sentimente si experiente de viata. Lucru care nu poate fi decat un extraordinar exercitiu privind dezvoltarea abilitatilor necesare interactiunii cu cei din jurul nostru. Astfel invatam sa empatizam mai bine si sa devenim mai sociabili.
					</p>
					<p id="paragraf_home9"> <strong id="titlu9">10. Alunga plictiseala si reimprospateaza mintea.</strong>
					Cine nu detesta acele momente in care, pur si simplu, te topesti de plictiseala? Toata lumea, te asigur. Ce poti face in aceste situatii? Sa citesti, ai ghicit! Cartea poate fi purtata cu usurinta pretutindeni. De pilda, la cursuri. Dar numai la cele cu adevarat plictisitoare. Poate fi luata la serviciu pentru a citi in pauze. Atunci cand stii ca trebuie sa astepti mai mult timp pe cineva. Atunci cand faci calatorii de lunga durata. Foloseste-o atunci cand ai nevoie de un refresh. Acum, avand in vedere faptul ca am aflat care sunt efectele benefice ale lecturii, nu iti pot spune decat atat: citeste. Citeste cartile care iti plac, cele care iti trezesc curiozitatea ori pe cele din care stii ca vei avea ceva de invatat. Citeste mult si constructiv. Citeste si vei avea parte de o dezvoltare personala armonioasa.
					</p>
					
				</div>
            </div>
                <!--close content-->	
				
				
			</div>
			<!--close site_content-->
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