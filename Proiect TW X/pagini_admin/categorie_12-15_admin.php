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
		<title> Categorie de ani intre 12 si 15 ani! </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style_c3.css"/>
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
					<li><a href="categorie_9-12_admin.php">Categorie 9-12 ani</a></li>
					<li class="current"><a href="categorie_12-15_admin.php">Categorie 12-15 ani</a></li>
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
								<form action="search.php">
									<input type="text" placeholder="Cauta.." name="search">
									<button type="submit"><i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<h2>Cuprins</h2>
							
								<p><i>1.RASCOALA – LIVIU REBREANU</i></p>
								<p><i>2.O calatorie spre central Pamantului – Jules Verne</i></p>
								<p><i>3. COPIII CAPITANULUI GRANT – Jules Verne</i></p>
								<p><i>4.Mara – Ioan Slavici</i></p>
								<p><i>5.Harry Potter*– J.K. Rowling</i></p>
								<p><i>6. Cei trei mușchetari – Alexandre Dumas</i></p>
								<p><i>7. La Medeleni – Ionel Teodoreanu</i></p>
								<p><i>8.Toate pânzele sus – Radu Tudoran</i></p>
								<p><i>9. Robinson Crusoe – Daniel Defoe</i></p>
							<h2>Personaje</h2>
								<p id="personaje">Miron Iuga</p>
								<p id="personaje">Plutonierul Boiangiu</p>
								<p id="personaje">Baloleanu</p>
								<p id="personaje">Grigore Iuga</p>
								<p id="personaje">Nadina</p>
								<p id="personaje">Petre Petre</p>

						</div>
						<!--close sidebar_item-->
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
			
			<div id="content">
                <div class="content_item">
				<center>
					<img width="700" height="450" alt="eroare incarcare imagine" src="../imagini/adolescenti.jpg"/>
				</center>	
					<div id="detalii_personaje">
						<div id="pov">
							<p>Detalii personaje "Mara" – Ioan Slavici: </p>
						</div>
						<div id="desc">
							<p id="pers">Mara: </p>
							<p id="descriere">Personajul principal femeia vaduva cu doi copii , mare, spatoasa, greoaie si cu obrajii batuti de soare, de ploi si de vant , isi castiga existenta din negustorie.
							</p>
							<p id="pers">Persida: </p>
							<p id="descriere">Persida este fiica Marei, sora lui Trica, sotia lui Natl si nora macelarului Hubar, inalta, lata-n umeri, plina, rotunda si cu toate acestea subtirica s-o frangi din mijloc , fire sincera si voluntari, delicati si puri, Persida invinge loviturile sortii cu multa cutezanta, dar si cu o calmi resemnare.
							</p>
							<p id="pers">Celelalte personaje: </p>
							<p id="descriere">Natl, Hubar, Bocioaca, Trica, Bandi, preotul Codreanu sunt firav conturati. Numai Trica este un erou mai prezent in roman prin faptele sale si integritatea morala. Personajele episodice se raporteaza, intr-un fel sau altul, la destinul Persidei, evidentiind nobletea sufleteasca si forta personajului.
							</p>					
						</div>
					<div>
				<center>
					<div id="titlu-pov">
						Mara-Ioan Slavici
					</div>
					<div id="poveste">
						<p>&nbsp; I. Sărăcuţii mamei<br> &nbsp;
						A rămas Mara, săraca, văduvă cu doi copii, sărăcuţii de ei, dar era tânără şi voinică şi harnică şi Dumnezeu a mai lăsat să aibă şi noroc.
						Nu-i vorbă, Bârzovanu, răposatul, era, când a fost, mai mult cârpaci decât cizmar şi şedea mai bucuros la birt decât acasă; tot le-au mai rămas însă copiilor vreo două sute de pruni pe lunca Murăşului, viuţa din dealul despre Păuliş şi casa, pe care muma lor o căpătase de zestre. Apoi, mare lucru pentru o precupeaţă, Radna e Radna, Lipova e numai aci peste Murăş, iar la Arad te duci în două ceasuri.
						Marţi dimineaţa Mara-şi scoate şatra şi coşurile pline în piaţa de pe ţărmurele drept al Murăşului, unde se adună la târg de săptămână murăşenii până de pe la Sovârşin şi Soboteliu şi podgorenii până de pe la Cuvin. Joi dimineaţa ea trece Murăşul şi întinde şatra pe ţărmurele stâng, unde se adună bănăţenii până de pe la Făget, Căpălnaş şi Sân-Miclăuş. Vineri noaptea, după cântatul cocoşilor, ea pleacă la Arad, ca ziua s-o prindă cu şatra întinsă în piaţa cea mare, unde lumea se adună din şapte ţinuturi.
						Dar lucrul cel mare e că Mara nu-ţi iese niciodată cu gol în cale; vinde ce poate şi cumpără ce găseşte; duce de la Radna ceea ce nu găseşti la Lipova ori la Arad şi aduce de la Arad ceea ce nu găseşti la Radna ori la Lipova. Lucrul de căpetenie e pentru dânsa ca să nu mai aducă ce a dus şi vinde mai bucuros cu câştig puţin decât ca să-i „clocească” marfa.
						Numai în zilele de Sântă Marie se întoarce Mara cu coşurile deşerte la casa ei.
						Sus, pe coasta unui deal de la dreapta Murăşului, e mănăstirea minoriţilor, vestita Maria Radna. Din turnurile bisericii mari şi frumoase se văd pe Murăş la deal ruinele acoperite cu muşchi ale cetăţii de la Şoimoş; în faţa bisericii se întinde Radna cea frumoasă şi peste Murăş e Lipova cu turnul sclipicios şi plin de zorzoane al bisericii româneşti,iar pe Murăş la vale se întinde şesul cel nesfârşit al Ţării Ungureşti.Mara însă le trece toate cu vederea: pentru dânsa nu e decât un loc larg în faţa mănăstirii, unde se adună lumea cea multă, grozav de multă lume.
						Cică e acolo în biserica aceea o icoană făcătoare de minuni, o Maică Precistă care lăcrimează şi de a căreia vedere cei bolnavi se fac sănătoşi, cei săraci se simt bogaţi şi cei nenorociţi se socotesc fericiţi.
						Mara, deşi creştină adevărată, se duce şi ea câteodată la biserica aceasta, dar se închină creştineşte, cu cruci şi cu mătănii, cum se cuvine în faţa lui Dumnezeu. Că icoana face minuni, asta n-o crede; ştie prea bine că o Maică Precistă nemţească nu e o adevărată Maică Precistă. E însă altceva la mijloc. Călugării, care umblă raşi ca-n palmă şi se strâmbă grozav de urât, au o ştiinţă tainică şi ştiu să facă fel de fel de farmece pentru ca boala să-şi vie la leac, săracul să-şi găsească sprijoana şi nenorocitul să se fericească. Bine face dar lumea care vine la Maria Radna să se închine, şi Marei îi râde inima când pe la Sinte Mării timpul e frumos, ca lumea să poată veni cale de o săptămână de zile, cete-cete, cu praporele în vânt, cu crucile împodobite cu flori şi cântând psalmi şi litanii. Acum, când vin sutele şi se adună miile pe locul cel larg din faţa mănăstirii, acum e secerişul Marei, care dimineaţa iese cu
						coşurile pline şi seara se întoarce cu ele goale. De aceea se închină Mara şi în faţa icoanei, apoi îşi ia copilaşii, pe care totdeauna îi poartă cu dânsa, îi dă puţin înainte şi le zice: "Închinaţi-vă şi voi, sărăcuţii mamei!"
						Sunt săraci, sărăcuţii, că n-au tată; e săracă şi ea, c-a rămas văduvă cu doi copii; cui, Doamne, ar putea să-i lase când se duce la târg? cum ar putea dânsa să stea de dimineaţă până seara fără ca să-i vadă? cum, când e atât de bine să-i vezi?!
						Umblă Mara prin lume, aleargă sprintenă, se târguieşte şi se ceartă cu oamenii, se mai ia şi de cap câteodată, plânge şi se plânge c-a rămas văduvă, şi apoi se uită împrejur să-şi vadă copiii şi iar râde.
						"Tot n-are nimeni copii ca mine!" îşi zice ea, şi nimeni nu poate s-o ştie aceasta mai bine decât dânsa, care ziua toată vede mereu copii şi oameni şi nu poate să vadă fiinţă omenească fără ca s-o pună alăturea de copiii ei. Mult sunt sănătoşi şi rumeni, voinici şi plini de viaţă, deştepţi şi frumoşi, răi sunt, mare minune, şi e lucru ştiut că oameni de dai-Doamne numai din copii răi se fac.
						Mai sunt şi zdrenţăroşi şi desculţi şi nepieptănaţi şi nespălaţi şi obraznici, sărăcuţii mamei; dar tot cam aşa e şi mama lor ea însăşi; cum altfel ar putea să fie o văduvă săracă? cum ar putea să fie copiii săraci, care îşi petrec viaţa în târg, printre picioarele oamenilor?
						Muiere mare, spătoasă, greoaie şi cu obrajii bătuţi de soare, de ploi şi de vânt, Mara stă ziua toată sub şatră, în dosul mesei pline de poame şi de turtă dulce. La stânga, e coşul cu peşte, iar la dreapta clocoteşte apa fierbinte pentru "vornovişti", pentru care rade din când în când hreanul de pe masă. Copiii aleargă şi îşi caută treabă, vin când sunt flămânzi şi iar se duc după ce s-au săturat, mai se joacă voioşi, mai se bat, fie între dânşii, fie cu alţii, şi ziua trece pe nesimţite.
						Serile, Mara, de cele mai multe ori, mănâncă ea singură, deoarece copiii, obosiţi, adorm, în vreme ce ea găteşte mâncarea. Mănâncă însă mama şi pentru ea, şi pentru copii. Păcat ar fi să rămâie ceva pe mâine.</p>
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

