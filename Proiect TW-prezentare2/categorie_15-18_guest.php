<?php
session_start();
if(isset($_SESSION['username']))
	//header('location: home.html');
echo'
<!DOCTYPE html>
<html lang="ro">
	<head>
		<title>  Categorie de ani intre 15 si 18 ani!</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style_c4.css"/>
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
					<li><a href="home_guest.php">Home</a></li>
					<li><a href="categorie_5-9_guest.php">Categorie 5-9 ani</a></li>
					<li><a href="categorie_9-12_guest.php">Categorie 9-12 ani</a></li>
					<li><a href="categorie_12-15_guest.php">Categorie 12-15 ani</a></li>
					<li class="current"><a href="categorie_15-18_guest.php">Categorie 15-18 ani</a></li>

					
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
								<p><i>1. Spărgătorul de nuci – E.T.A. Hoffmann</i></p>
								<p><i>2.  Mândrie și prejudecată - Jane Austen</i></p>
								<p><i>3. Romeo și Julieta de William Shakespeare</i></p>
								<p><i>4.Morometii – Marin Preda</i></p>
								<p><i>5.Ion – Liviu Rebreanu</i></p>
							<h2>Personaje</h2>
								<p id="personaje">Regele Soarecilor</p>
								<p id="personaje">Spargatorul de Nuci</p>
								<p id="personaje">Printesa</p>
								<p id="personaje">Zanele</p>
								<p id="personaje">Copii</p>
								<p id="personaje">Poneiul</p>
							 
						</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">
				<center>
					<img width="700" height="450" alt="Eroare incarcare imagine" src="imagini/18.jpg"/>
				</center>
					<div id="detalii_personaje">
						<div id="pov">
							<p>Detalii personaje "Ion" - Liviu Rebreanu: </p>
						</div>
						<div id="desc">
							<p id="pers">Ion: </p>
							<p id="descriere">Personaj principal, realist, drama lui Ion este drama taranului sarac. Mandru si orgolios, constient de calitatile sale, nu-si accepta conditia si este pus in situatia de a alege intre iubirea pentru Florica si zestrea Anei. In dorinta de a obtine mai intai pamantul, apoi iubirea, personajul se dezumanizeaza treptat, iar finalul tragic are sens moralizator.
							</p>
							<p id="pers">Vasile Baciu: </p>
							<p id="descriere">Personaj secundar, tatal Anei , se afla in conflict permanent cu Ion si nu-si doreste ca acesta sa-I devina ginere.
							</p>
							<p id="pers">Ana: </p>
							<p id="descriere">Personaj secundar, realist;,reprezinta conditia femeii in societatea rurala a epocii. Fiica a chiaburului Vasile Baciu, promisa ca sotie unui taran bogat, George Bulbuc, este sedusa de Ion al Glanetasului, care vede in casatoria cu ea singura posibilitate de a se imbogati.
							</p>
							<p id="pers">Florica: </p>
							<p id="descriere">Personaj secundar, o alta ipostaza a feminitatii; frumoasa, dar saraca, devine al doilea motiv al infruntarii lui Ion cu George Bulbuc.
							</p>
							<p id="pers">Zaharia Herdelea: </p>
							<p id="descriere">Personaj secundar, unidimensional,invatatorul din satul Pripas reprezinta o ipostaza a intelectualitatii rurale.
							</p>							
						</div>
					<div>
				<center>
					<div id="titlu-pov">
						Ion-Liviu Rebreanu
					</div>
					<div id="poveste">
						<p>&nbsp;ÎNCEPUTUL <br>&nbsp;Din soseaua ce vine de la Cârlibaba, întovarasind Somesul ba în dreapta, ba în stânga pâna la Cluj si chiar mai departe, sedesprinde un drum alb, mai sus de Armadia, trece râul pestepodul batrân de lemn, acoperit cu sindrila mucegaita, spintecasatul Jidovita si alearga spre Bistrita, unde se pierde în cealaltasosea nationala care coboara din Bucovina prin trecatoareaBâr-gaului.Lasând Jidovita, drumul urca întâi anevoe pâna ce-si face locprintre dealurile strâmtorate, pe urma însa înainteaza vesel,neted, mai ascunzându-se printre fagii tineri ai PaduriiDomnesti, mai poposind putin la Cismeaua Mortului, undepicura vesnic apa de izvor racoritoare, apoi coteste brusc pesubt Râpele Dracului, ca sa dea buzna în Pripasul pitit într-oscrântitura de coline.La marginea satului te întâmpina din stânga o cruce strâmbape care e rastignit un Hristos cu fata spalacita de ploi si cu ocununita de flori vestede agatata de picioare. Sufla o adiereusoara si Hristos îsi tremura jalnic trupul de tinichea ruginitape lemnul mâncat de carii si înnegrit de vremuri.Satul parca e mort. Zapuseala ce pluteste în vazduh tese otacere nabu-sitoare. Doar în rastimpuri fâsie alene frunzeleadormite prin copaci. Unfuior de fum albastriu se cazneste sa se înalte dintre crengilepomilor, se balabaneste putin ca o matahala ametita si sepravalc peste gradinile prafuite, învaluindu-le într-o ceatacenusie. în mijlocul drumului picoteste câinele învatatorului ZahariaHerdelea, cu ochii întredeschisi, suflând greu. O pisica alba calaptele vine în vârful picioarelor, ferindu-se sa nu-simurdareasca labele prin praful ulitei, zareste câinele, sta putinpe gânduri, apoi îsi iuteste pasii si se furiseaza în livada îngradita cu nuiele, peste drum.Casa învatatorului este cea dintâi, taiata adânc în coasta uneicoline, încinsa cu un pridvor, cu usa spre ulita si cu douaferestre care se uita tocmai în inima satului, cercetatoare sidojenitoare. Pe prichiciul pridvorului, în dreptul usii, unde sespala dimineata învatatorul, iar dupa amiazi, când a ispravittreburile casei, dna Herdelea, strajuieste o ulcica verzue de lut.In ograda, între doi meri tineri, e întinsa vesnic sfoara pe careacuma atârna niste camasi femeesti de stamba. în umbracamasilor, în nisipul fierbinte se scalda câteva gaini, pazite deun cocos mic cu creasta însângerata.Drumul trece peste pârâul Doamnei lasând în stânga casa luiAlexandru Pop-Glanetasu. Usa e închisa cu zavorul; coperisulde pae parca e un cap de balaur; peretii spoiti de curînd deabiase vad prin sparturile gardului.Pe urma vine casa lui Macedon Cercetasu, pe urma casaprimarului Florea Tancu, pe urma altele... într-o curte marerumega, culcate, doua vaci unguresti, iar o baba sade peprispa, ca o scoaba, prajindu-se la soare nemiscata, parc-ar fide lemn...Caldura picura mereu, din cer, îti usuca podul gurii, tesugruma. în dreapta si în stânga casele privesc sfioase dindosul gardurilor vii, acoperin-du-si fetele subt stresinile stirbitede ploi si de vite.Acum un dulau latos, cu limba spânzurata, se apropie în traplenes, fara tinta. Din sant, dintre buruenile caruntite de colb, serepede un catel murdar, cu coada în vânt. Latosul nu-l ia înseama ca si când i-ar fi lene sa se opreasca. Numai când cellaltse încapatâneaza sa-l miroase, îi arata niste colti amenintatori,urmându-si însa calea cu demnitatea cuvenita. Catelul seopreste nedumerii, se uita putin în urma dulaului, apoi se întoarce în buruiene unde se aude îndata un rontait caznit siflamând...Deabia la cârciuma lui Avrum începe sa se simta ca satultraieste. Pe prispa doi tarani îngândurati ofteaza rar cu o sticlade rachiu la mijloc. Din departare patrund pâna aici sunete deviori si chiuituri...Dumineca. Satul e la hora. Si hora e pe ulita din dos, la Todosia, vaduva lui Maxim Oprea.Casa vadanei este chiar peste drum de bisericuta veche,pleostita si darapanata. Vaduvia-i saracie lucie. Femeia a datdin rau în mai rau. Ce agoniseste un cap de barbat într-o viata întreaga, o muiere nepriceputa prapadeste într-un an de zile, simai putin. Când a împreunat Maxim mâinile pe piept, în ogradaerau clai de fân, în cele doua grajduri nu mai încapeau vitele, în sura si subt sopron n-aveau loc carele. Se vedea de departebelsugul... Acuma ograda-i goala batatura, iar în grajduri ragea pustiu o închipuire de vaca stearpa si vesnic flamânda.Hora e în toi... Locul geme de oameni... Nucii batrâni de lângasura tin umbra. Doar câteva pete albe de raze razbesc printrefrunze gâdilând fetele aprinse de veselie. Zaduful atâtasângele lumii. Peste Magura Cocorilor atârna soarele îngalbenitde necaz ca mai are o postata buna pâna la sfintit.Cei trei lautari cânta lânga sopron sa-si rupa arcusurile.</p>
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
