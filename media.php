<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Media - Theresa Maria Romes</title>
		<meta charset="utf-8">
		<meta name="description" content="Galerie mit verschiedenen Impressionen sowie mehrere Hörproben.">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<!-- CSS einbinden -->
		<link href="style.css" rel="stylesheet" type="text/css">
		
		<!-- Google Fonts einbinden -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic|Istok+Web:400,400italic,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Satisfy|Playball|Great+Vibes|Parisienne' rel='stylesheet' type='text/css'>
		
		<!-- jQuery Lightbox einbinden (für Bildergalerie) -->
		<link rel="stylesheet" href="lightbox2-master/dist/css/lightbox.min.css">
		
		<script type="text/javascript">
			/**
			* öffnet ein Tab (klick auf oberen Tab (Reiter).
			* @param index: welcher Tab wurde geklickt, 1 bis n.
			*/
			function openTab(index) {
				var element = document.getElementsByTagName('div');
				var name = "";
				var obj;
				
				for (var i = 0; i < element.length; i++) {
					name = element[i].id;
					if (name.substr(0,4) == 'box_') {
						obj = document.getElementById(name);
						
						obj.hidden = true;
						
					}
					if (name.substr(0,4) == 'tab_') {
						obj = document.getElementById(name);
						obj.setAttribute('class','tabs_passive');			
					}
					
				}
				var tab = document.getElementById("box_"+index);
				tab.hidden = false;
				tab = document.getElementById("tab_"+index);
				tab.setAttribute('class','tabs_active');
				
				/* www.MrKnowing.com */
			}
		</script>
		
		<script type="text/javascript">
			/**
			* Passt Bild an Rahmen an (je nachdem ob Hoch- oder Querformat).
			* @param datei: Bilddatei aus der Breite und Höhe entnommen werden
			*/
			function bildgroesse(id) {
				
				var bild = document.getElementById(id);
				
				if (bild.width > bild.height) {
					bild.setAttribute("height","100%");
					bild.setAttribute("width","auto");
				} else {
					bild.setAttribute("height","auto");
					bild.setAttribute("width","100%");
				}
			}	
		</script>
		
	</head>
	<body>
		<div class="container">
			<aside>
			
				<!-- Navigation & Bild -->
				<div class="nav_bild_container">	
					<img src="img/Media.png" alt="Media" class="nav_bild">	
				</div>
				
				<nav class="navigation vertical">
					<ul>
						<li>
							<a href="home.php" title="Home">Home</a>
						</li>
						<li>
							<a href="vita.php" title="Vita">Vita</a>
						</li>
						<li>
							<a href="kalender.php" title="Kalender">Kalender</a>
						</li>
						<li>
							<a href="repertoire.php" title="Repertoire">Repertoire</a>
						</li>
						<li>
							<a href="media.php" title="Media" class="active">Media</a>
						</li>
						<li>
							<a href="presse.php" title="Presse">Presse</a>
						</li>
						<li>
							<a href="kontakt.php" title="Kontakt">Kontakt</a>
						</li>
					</ul>
				</nav>
				<!-- Textur unten -->
				<div class="background">
					<img src="img/Background3.png" alt="textur_unten" class="textur_background">
				</div>
			</aside>
			
			<div class="right_column">
				<!-- LOGO --> 
				<div>
					<a href="home.php" class="header_link">
						<div class="header">
							<h1>Theresa Maria Romes</h1>
							<h2>Sopran</h2>
						</div>
					</a>
				</div>

				<!-- INHALT -->
				<div class="inhalt">
					<h3>Media</h3>
					
					<!-- Tab Menü -->
						<div class="tabmenü">
						
							<hr>
							
							<!-- Menü Reiter -->
							<div id="tab_1" class="tabs" onclick="openTab(1)">Galerie</div>
							<div id="tab_2" class="tabs" onclick="openTab(2)">Hörproben</div>
							
							<!-- float aufheben -->
							<div style='clear: both;'></div>
							
							<hr>
							
							<!-- Inhaltsboxen für die Tabs -->
							<!-- BOX 1 >> GALERIE -->
							<div id="box_1" class="boxen">
							
								<!-- Künstlerfoto -->
								<div class="div_kuenstlerfoto">
									<aside>
										<img class="kuenstlerbild" src="img/Kuenstlerbild_thumbnail.jpg" alt=""/>
									</aside>
									<section>
										<p><b>Aktuelles Künstlerbild</b></p>
										<a href="img/Kuenstlerbild.jpg" download="img/Kuenstlerbild.jpg" title="Download">Download (<?php echo downloadsize("img/Kuenstlerbild.jpg"); ?>)</a>
									</section>
								</div>
								
								<!-- Galerie -->
								<!-- zu galerie_abstand: bei 3x3 Bildern besitzen jeweils nur die ersten beiden Bilder einer Zeile diese Klasse -->
								<div class="galerie">
									<div class="galerie_ausschnitt galerie_abstand">
										<a href="img/Galerie/AusschnittPaganini.JPG" data-lightbox="galerie" data-title="Ausschnitt Paganini">
											<img id="01" src="img/Galerie/AusschnittPaganini.JPG" onLoad="bildgroesse('01')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt galerie_abstand">
										<a href="img/Galerie/Dido And Aeneas.JPG" data-lightbox="galerie" data-title="Dido And Aeneas">
											<img id="02" src="img/Galerie/Dido And Aeneas.JPG" onLoad="bildgroesse('02')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt">
										<a href="img/Galerie/Dido And Aeneas2.JPG" data-lightbox="galerie" data-title="Ausschnitt Paganini">
											<img id="03" src="img/Galerie/Dido And Aeneas2.JPG" onLoad="bildgroesse('03')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt galerie_abstand">
										<a href="img/Galerie/Die Heirat.JPG" data-lightbox="galerie" data-title="Ausschnitt Die Heirat">
											<img id="04" src="img/Galerie/Die heirat.JPG" onLoad="bildgroesse('04')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt galerie_abstand">
										<a href="img/Galerie/La finta giardiniera.JPG" data-lightbox="galerie" data-title="Ausschnitt La finta giardiniera">
											<img id="05" src="img/Galerie/La finta giardiniera.JPG" onLoad="bildgroesse('05')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt">
										<a href="img/Galerie/La fita giardiniera.JPG" data-lightbox="galerie" data-title="Ausschnitt La finta giardiniera">
											<img id="06" src="img/Galerie/La fita giardiniera.JPG" onLoad="bildgroesse('06')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt galerie_abstand">
										<a href="img/Galerie/Oktober 2015.jpg" data-lightbox="galerie" data-title="Oktober 2015">
											<img id="07" src="img/Galerie/Oktober 2015.jpg" onLoad="bildgroesse('07')" alt=""/>
										</a>
									</div>
									<div class="galerie_ausschnitt galerie_abstand">
										<a href="img/Galerie/The Turn Of The Screw.jpg" data-lightbox="galerie" data-title="Ausschnitt The Turn Of The Screw">
											<img id="08" src="img/Galerie/The Turn Of The Screw.jpg" onLoad="bildgroesse('08')" alt=""/>
										</a>
									</div>	
								</div>
							</div>
							
							<!-- BOX 1 >> HÖRPROBEN -->
							<div id="box_2" class="boxen">
								
								<!-- DATEI NR 1 -->
								<p class="audio-beschreibung"><b>Mozart, Il Nozze die Figaro, Zerlina</b></p>
								<div class="audio">
									<audio controls>
										<source src="01 Mozart, Il Nozze die Figaro, Zerlina.mp3" type="audio/mp3" />
										<source src="01 Mozart, Il Nozze die Figaro, Zerlina.wav" type="audio/wav" />
										Ihr Browser kann dieses Tondokument nicht wiedergeben.
									</audio>
								</div>
								
								<hr>
								
								<!-- DATEI NR 2 -->
								<p class="audio-beschreibung"><b>Weber, Der Freischütz, Ännchen</b></p>
								<div class="audio">
									<audio controls>
										<source src="02 Webern, Der Freischütz, Ännchen.mp3" type="audio/mp3" />
										<source src="02 Webern, Der Freischütz, Ännchen.wav" type="audio/wav" />
										Ihr Browser kann dieses Tondokument nicht wiedergeben.
									</audio>
								</div>
								
								<hr>
							</div>
						
						</div>
						
						<!-- Erster Aufruf des Tabmenüs -->
						<script type="text/javascript">
							openTab(1); //Tab 1 öffnen
						</script>
						
				</div>
			</div>
		</div>
		
		<!-- Noch mehr Skripte & Code -->
		<script src="lightbox2-master/dist/js/lightbox-plus-jquery.min.js"></script>
		
		<script>
			lightbox.option({
				'resizeDuration': 250,
				'wrapAround': true,
				'disableScrolling': true
			})
		</script>
		
		<?php
			/* Funktion zur Errechnung der Dateigröße */
			function downloadsize($URL){
				$Groesse = filesize($URL);

				if($Groesse < 1000){
					return number_format($Groesse, 0, ",", ".")." Bytes";
				}
				elseif($Groesse < 1000000){
					return number_format($Groesse/1024, 0, ",", ".")." kB";
				}
				else{
					return number_format($Groesse/1048576, 1, ",", ".")." MB";
				}
			}
		?>

	</body>
</html>















