<!DOCTYPE html>
<html lang="ro">
	<head>
				<link rel="stylesheet" type="text/css" href="../css/style_for_error.css"/>
	</head>
	<body>


<?php
session_start();
if(isset($_SESSION['username']) and isset(($_COOKIE['cont_de_administrator'])))
	//header('location: home.html');
echo'
<!DOCTYPE html>
<html lang="ro">
	<head>
		<title> Categorie de ani intre 9 si 12 ani! </title>
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
					<li><a href="home_admin.php">Home</a></li>
					<li><a href="categorie_5-9_admin.php">Categorie 5-9 ani</a></li>
					<li class="current"><a href="categorie_9-12_admin.php">Categorie 9-12 ani</a></li>
					<li><a href="categorie_12-15_admin.php">Categorie 12-15 ani</a></li>
					<li><a href="categorie_15-18_admin.php">Categorie 15-18 ani</a></li>

					
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
								<p><i>1. Alice în Țara Minunilor – Lewis Carroll </i></p>
								<p><i>2.Teatru –ION LUCA CARAGIALE</i></p>
								<p><i>3. Aventurile lui Tom Sawyer – Mark Twain</i></p>
								<p><i>4. AVENTURIERII DE LA MECCA - KARL MAY</i></p>
								<p><i>5. FRANKENSTEIN-MARY SHELLEY</i></p>
								<p><i>6. Aventurile lui Huckleberry Finn – Mark Twain</i></p>
								<p><i>7. Micul Prinț – Antoine de Saint-Exupery</i></p>
							<h2>Personaje</h2>
								<p id="personaje">Alice</p>
								<p id="personaje">Palarierul Nebun</p>
								<p id="personaje">Iepurele Alb</p>
								<p id="personaje">Ducesa</p>
								<p id="personaje">Valetul de inima</p>
								<p id="personaje">Soarece</p>
								<p id="personaje">Fish Footman</p>
								<p id="personaje">Rata</p>
								<p id="personaje">Lacheu-Broasca</p>
								<p id="personaje">Soparla Bill Khan</p>
								<p id="personaje">Falsa Broasca Testoasa</p>
								<p id="personaje">Omida</p>
								<p id="personaje">Pisica de Cheshire</p>
								<p id="personaje">Iepurele de Martie</p>
								<p id="personaje">Regele de Inima Rosise</p>
								<p id="personaje">Pui de Vultur</p>
								<p id="personaje">Catel</p>
								<p id="personaje">Pasare in Copac</p>
								<p id="personaje">Regina de Inima Rosise</p>
								<p id="personaje">Bursucel</p>
								<p id="personaje">Dodo</p>
								<p id="personaje">Grifonul</p>
								<p id="personaje">Pat</p>
								<p id="personaje">Lori</p>
						</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">
				<center>
					<img width="700" height="450" alt="Eroare incarcare imagine" src="../imagini/copii10-15.jpg"/>
				</center>
					<div id="detalii_personaje">
						<div id="pov">
							<p>Detalii personaje "Alice in Tara Minunilor"-Lewis Carroll: </p>
						</div>
						<div id="desc">
							<p id="pers">Alice: </p>
							<p id="descriere">Personaj principal , fetita ce ajunge pe un alt taram ,locul pe care l-a vizitat pentru prima dată în copilărie (și l-a numit Wonderland)—deși nu mai ține minte nimic, nici despre locul în sine, nici despre locuitorii săi. Alice se întâlnește totuși cu prietenii din copilărie.
							</p>
							<p id="pers">Palarierul Nebun: </p>
							<p id="descriere">Cel ce o invita pe Alice la masa , singurul prieten adevar al lui Alice.
							</p>
							<p id="pers">Regina de Inima-Rosie: </p>
							<p id="descriere">Impertinenta,cruda, la cea mai mica greseala comisa de slugile ei, acestea sunt puse sa le fie taiate capetele.
							</p>
							<p id="pers">Omida: </p>
							<p id="descriere">Cel ce-i ofera sfaturi micutei Alice, si totodata pasionat de fumat.
							</p>
							<p id="pers">Iepurele Alb: </p>
							<p id="descriere">Cel ce o conduce pe Alice la regina de Inima-Rosie.
							</p>							
						</div>
					<div>
					
					<center>
						<div id="titlu-pov">
							Alice in Tara Minunilor-Lewis Carroll
						</div>
						<div id="poveste">
							<p>Aşezată lângă sora ei, pe malul apei, Alice începuse a se plictisi, pentru că nu
							avea nimic de făcut. Ba chiar, o dată sau de două ori, aruncase o privire asupra
							cărţii pe care o citea sora ei, dar nu văzu nici poze, nici dialog: „La ce-o fi bună o
							carte fără poze şi fără dialog?” se întrebă Alice.
							Şi doar ce era pe punctul de a chibzui (atât cât se poate chibzui pe o arşiţă
							ca asta, care te îndeamnă la moţăit) dacă plăcerea de a împleti o coroniţă de
							flori merita osteneala de a se ridica şi de a culege margarete, când, deodată, un
							Iepuraş Alb, cu ochii de mărgean, trecu în fugă chiar pe lângă ea.
							Nimic nu fu în măsură să-i stârnească mirarea; nu i se păru neobişnuit nici chiar
							atunci când îl auzi pe Iepuraş bombănind: „Vai, vai, vai! O să întârzii!”
							Mai târziu, când se gândi la întâmplarea asta, îşi dădu seama că s-ar fi cuvenit să
							o mire, dar, în acea clipă, totul îi păru cât se poate de firesc.
							Iepuraşul scoase din buzunarul vestei un ceasornic, se uită la el şi apoi se puse
							din nou pe fugă, mult mai iute de data asta. Văzând una ca asta, Alice se repezi
							în picioare; de îndată îşi dădu seama că nu mai văzuse niciodată până atunci un
							Iepure care să aibă vestă cu buzunare şi nici ceas pe care să-l scoată din ele. Şi,
							tare curioasă, o luă la fugă, peste câmp, pe urmele Iepuraşului, pe care, cu puţin
							noroc, îl zări tocmai când se strecura într-o vizuină măricică de sub tufişuri.
							Nu trecu mult şi Alice se furişă la rândul ei în vizuină, fără a cumpăni însă la felul
							în care va trebui să iasă înapoi.
							O bucată de drum, merse prin vizuină ca printr-un tunel drept, apoi o luă brusc la
							vale, dar atât de brusc, încât Alice nici n-apucă să se oprească; se trezi
							alunecând în jos, ca într-un puţ, foarte, foarte adânc.
							Fie puţul era foarte adânc, fie Alice cădea foarte, foarte domol, căci, în vreme ce
							cădea, avu timp să privească pe îndelete în jurul ei şi să se întrebe ce urma să se
							întâmple.
							Mai întâi, se strădui să privească în jos, spre a se lămuri asupra locurilor unde va
							ajunge, dar se făcea un întuneric din ce în ce mai mare, ca să mai poată desluşi
							ceva.
							Apoi se uită la pereţii puţului şi băgă de seamă că erau acoperiţi cu rafturi cu
							provizii şi cu etajere cu cărţi; din loc în loc se găseau agăţate hărţi geografice şi
							tablouri, în trecere, luă de pe un raft un borcan, pe a cărui etichetă era scris:
							DULCEAŢĂ DE PORTOCALE, dar, spre marea ei dezamăgire, acesta era gol. Nu
							cuteză să-l arunce, de teamă ca, în cădere, acesta să nu lovească pe cineva care
							s-ar putea afla dedesubt. Izbuti cu greu să aşeze borcanul pe un alt raft pe lângă
							care aluneca.
							„Ei, bine!” îşi zise Alice, „după o aşa cădere, nici c-o să-mi mai pese când mă voi
							da de-a dura pe scări! Cât de curajoasă am să le par celor de acasă! De acum,
							chiar de-ar fi să cad de pe acoperiş, n-aş mai scoate nici un sunet.” (Şi e mai mult
							ca sigur că grăia adevărul.)
							</p>
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
