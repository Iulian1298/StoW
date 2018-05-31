<!DOCTYPE html>
<html lang="ro">
	<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
	</head>
	<body>
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
		
		<link rel="stylesheet" type="text/css" href="../css/style_c1.css"/>
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
					<li><a href="home_guest.php">Home</a></li>
					<li class="current"><a href="categorie_5-9_guest.php">Categorie 5-9 ani</a></li>
					<li><a href="categorie_9-12_guest.php">Categorie 9-12 ani</a></li>
					<li><a href="categorie_12-15_guest.php">Categorie 12-15 ani</a></li>
					<li><a href="categorie_15-18_guest.php">Categoria 15-18 ani</a></li>

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
							<h2>Cuprins</h2>
								<p id="titluri"><i>1. Cartea Junglei –Rudyard Kipling</i></p>
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
				<center>
					<img width="700" height="450" alt="Eroare incarcare imagine" src="../imagini/copii7-10.jpg"/>
				</center>
					<div id="detalii_personaje">
						<div id="pov">
							<p>Detalii personaje "Pinnochio"-Carlo Collodi: </p>
						</div>
						<div id="desc">
							<p id="pers">Geppetto: </p>
							<p id="descriere">Pinocchio este o marioneta din lemn, adusa la viata printr-o zana albastru, care ii spune ca el poate deveni un baiat real daca dovedeste el insusi "curaj, sinceritate, si altruism". Astfel, incep aventurile marionetei de a deveni un baiat real, insa cu fiecare minciuna spusa nasul lui Pinocchio se va mari.
							</p>
							<p id="pers">Zana Albastra: </p>
							<p id="descriere">Zana Albastra era o fetita cu parul balai care de mai bine de o mie de ani locuia prin vecinatatea.Aceasta il transforma pe Pinocchio intr-o papusa vie si-I promite ca intr-o zi il va transforma intr-un baietel adevarat.
							</p>
							<p id="pers">Pisica si Vulpea: </p>
							<p id="descriere">Sunt  personajele negative ale povestii , acestea il amagesc pe naivul Pinocchio si il talharesc.
							</p>
							<p id="pers">Greierele Giminy: </p>
							<p id="descriere">Greierele este un personaj importat in poveste, autorul i-a apropiat asemanarea cu cea a unui om micut, fara urechi. Acesta locuia in odaia lui Pinocchio de mai bine de o suta de ani.
							</p>
							<p id="pers">Balena: </p>
							<p id="descriere">Balena e  mai mare decât o cladire cu cinci etajecu o gura atât de larga si adânca, încât ar încapea prea bine în ea un tren cu locomotiva cu tot. Pinocchio curios fiind sa afle cum arata aceasta Balena ajunge in burta ei.
							</p>							
						</div>
					<div>
				<center>
					<div id="titlu-pov">
						PINOCCHIO-Carlo Collodi

					</div>
					<div id="poveste">
							<p>— A fost odată... — Un împărat! se vor grăbi să mă întrerupă micuţii mei cititori. — Nu, dragii mei copii, v-aţi înşelat. A fost odată o bucată de lemn. Nu era un lemn de mare preţ, ci un lemn ca toate lemnele, din cele pe care iarna le punem în sobă, ca să facem focul şi să încălzim odăile. Nu ştiu cum s-a făcut, dar într-o bună zi, bucata asta de lemn s-a pomenit în prăvălia unui tâmplar bătrân, pe care-l chema, meşterul Anton, dar pe care lumea îl poreclise meşterul Cireaşă, din pricină că avea nasul roşu şi lustruit, ca o cireaşă coaptă. De-abia dădu cu ochii de bucata de lemn, şi meşterului Cireaşă începu să-i salte inima de bucurie şi frecându-şi mâinile mulţumit, bolborosi cu vocea pe jumătate: — Lemnul a sosit taman la vreme, am să fac din el un picior la o masă. Zis şi făcut. Puse numaidecât mâna pe bardă, ca să-l cureţe de coajă şi să-l subţieze dar nu apucă bine să-i scoată prima aşchie, şi rămase încremenit pe loc, deoarece auzise un glas piţigăiat, care începuse să strige: — Nu da în mine că mă doare! Vă puteţi lesne închipui cum a rămas bietul unchiaş, meşterul Cireaşă. Aruncă o privire speriată prin odaie ca să vadă dincotro venea vocea, dar nu văzu pe nimeni. Se uită sub masă, nimeni se uită într-un dulap care stătea veşnic închis, nimeni se uită în coşul cu răzătură şi talaşe, nimeni deschise uşa ca să dea o ochire în stradă, dar nimeni. Ei, atunci? — Am înţeles! adăugă el îndată, râzând şi scărpinându-şi „peruca", se vede că mi s-a părut. Haidem la lucru. Şi după ce luă iarăşi barda în mână, trase o lovitură zdravănă bucăţii de lemn. — Aoleu! Cum mă doare! strigă văicărindu-se aceeaşi voce piţigăiată. De rândul acesta, meşterul Cireaşă rămase înlemnit, cu ochii ieşiţi din cap de spaimă, cu gura căscată şi cu limba scoasă de un cot şi mai bine. După ce îşi veni puţin în fire, începu să îngâne, tremurând de frică: — De unde o fi ieşit glasul ăla, care a strigat „aoleu". Nu e nici ţipenie de om. Nu cumva bucata asta de lemn a învăţat să plângă şi să miorlăie ca un copil? Aşa ceva nu-mi vine să cred. Lemnul, uite-l aici: e un lemn de ars în sobă, ca atâtea al-tele, şi dacă îl pui pe foc poţi să-ţi fierbi o oală cu fasole. Ori poate că s-o fi ascuns cineva înăuntru? Dacă e aşa, atât mai rău pentru el. Îi arăt eu lui acum! Şi zicând acestea, apucă bucata de lemn cu amândouă mâinile şi începu s-o lovească fără milă de pereţii odăii. Apoi se puse să asculte, ca să vadă dacă se mai vaită cineva. Aşteptă două minute, nimic, cinci minute, nimic zece minute, tot nimic! — Am înţeles, zise el, căznindu-se să râdă şi îndreptându-şi peruca, se vede că mi s-a părut numai că aud un glas care să fi strigat „aoleo"! Haidem înapoi la lucru. Şi deoarece îi intrase frica în oase, începu să cânte, ca să prindă niţel curaj. Apoi, după ce puse jos barda, luă rindeaua, ca să subţieze şi să netezească bucata cea de lemn dar pe când dădea cu rindeaua în sus şi în jos, auzi din nou acelaşi glas, care îi spuse râzând: — Astâmpăra-te! Astâmpără-te că mă gâdil! De data aceasta, bietul meşter Cireaşă căzu ca trăsnit. Când deschise ochii, se pomeni lungit la pământ. Faţa lui părea schimbată cu totul, iar vârful nasului, din roşu cum era, se făcuse vânăt de groază.	</p>			

					</div>
					<div id="pagini">
						<input type="submit" value="1" id="button1">
						<input type="submit" value="2" id="button1">
						<input type="submit" value="3" id="button1">
						<input type="submit" value="4" id="button1">
						<input type="submit" value="5" id="button1">
				    </div>
				</center>	
				</div>
				<!--close content_item-->
				
				
            </div>
                <!--close content-->	
			
		</div>
		<!--close main-->
		
	</body>
</html>';
else
	echo '<p id="mesajErr">
			Nu esti logat, intai logheaza-te!!! <p><br>';
?>
	</body>
</html>