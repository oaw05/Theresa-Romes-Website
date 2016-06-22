<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Repertoire - Theresa Maria Romes</title>
		<meta charset="utf-8">
		<meta name="description" content="Das Repertoire der Sängerin Theresa Romes.">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<!-- CSS einbinden -->
		<link href="style.css" rel="stylesheet" type="text/css">
		
		<!-- Google Fonts einbinden -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic|Istok+Web:400,400italic,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Satisfy|Playball|Great+Vibes|Parisienne' rel='stylesheet' type='text/css'>
		
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
		
	</head>
	<body>
		<div class="container">
			<aside>
			
				<!-- Navigation & Bild -->
				<div class="nav_bild_container">	
					<img src="img/Repertoire.png" alt="Repertoire" class="nav_bild">	
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
							<a href="repertoire.php" title="Repertoire" class="active">Repertoire</a>
						</li>
						<li>
							<a href="media.php" title="Media">Media</a>
						</li>
						<li>
							<a href="presse.php" title="Presse">Presse</a>
						</li>
						<li>
							<a href="kontakt.php" title="Kontakt">Kontakt</a>
						</li>
					</ul>
				</nav>
				<!-- Textur Hintergrund-->
				<div class="background">
					<img src="img/Background3.png" alt="textur" class="textur_background">
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
					<h3>Repertoire</h3>
						<!-- Tab Menü -->
						<div class="tabmenü">
						
							<hr>
							
							<!-- Menü Reiter -->
							<div id="tab_1" class="tabs" onclick="openTab(1)">Oper</div>
							<div id="tab_2" class="tabs" onclick="openTab(2)">Lied</div>
							<div id="tab_3" class="tabs" onclick="openTab(3)">Konzert</div>
							
							<!-- float aufheben -->
							<div style='clear: both;'></div>
							
							<hr>
							
							<!-- Inhaltsboxen für die Tabs -->
							<!-- BOX 1 >> OPER -->
							<div id="box_1" class="boxen">
								<table class="table_repertoire">
									<tr id="table_header">
										<th>Komponist</th>
										<th>Titel</th>
										<th>Partie</th>
									</tr>
									
									<?php
										$opern = file("Oper.txt");
										
										
										for ($i=5; $i < count($opern)+1; $i=$i+4) {
											if (strcmp($opern[$i],"-") !== 0) {
												echo "<tr class='table_body'>";
												echo "<td>".$opern[$i-1]."</td>";
												echo "<td>".$opern[$i]."</td>";
												echo "<td>".$opern[$i+1]."</td>";
												echo "</tr>";
											} else {
												echo "Klappt nicht so ganz ...";
											}
										}
									
									?>
								</table>
								
							</div>
							
							<!-- BOX 2 >> LIED -->
							<div id="box_2" class="boxen">
								<table class="table_repertoire">
									<tr id="table_header">
										<th>Komponist</th>
										<th>Werk</th>
										<th>Werkverzeichnis</th>
									</tr>
									
									<?php
										$lieder = file("Lied.txt");
										
										
										for ($i=5; $i < count($lieder)+1; $i=$i+4) {
											if (strcmp($lieder[$i],"-") !== 0) {
												echo "<tr class='table_body'>";
												echo "<td>".$lieder[$i-1]."</td>";
												echo "<td>".$lieder[$i]."</td>";
												echo "<td>".$lieder[$i+1]."</td>";
												echo "</tr>";
											} else {
												echo "Klappt nicht so ganz ...";
											}
										}
									
									?>
								</table>
								
								<p class="lieder">Zudem ausgewählte Lieder von Brahms, Knab, Mozart, Reimann, 
								Schönberg, Schumann, Schubert, Strauss und vielen mehr!</p>
								
							</div>
							
							<!-- BOX 3 >> KONZERT -->
							<div id="box_3" class="boxen">
								<table class="table_repertoire">
									<tr id="table_header">
										<th>Komponist</th>
										<th>Werk</th>
										<th>Werkverzeichnis</th>
									</tr>
									
									<?php
										$konzerte = file("Konzert.txt");
										
										
										for ($i=5; $i < count($konzerte)+1; $i=$i+4) {
											if (strcmp($konzerte[$i],"-") !== 0) {
												echo "<tr class='table_body'>";
												echo "<td>".$konzerte[$i-1]."</td>";
												echo "<td>".$konzerte[$i]."</td>";
												echo "<td>".$konzerte[$i+1]."</td>";
												echo "</tr>";
											} else {
												echo "Klappt nicht so ganz ...";
											}
										}
									
									?>
								</table>
							</div>
							
						</div>
						
						<!-- Erster Aufruf des Tabmenüs -->
						<script type="text/javascript">
							openTab(1); //Tab 1 öffnen
						</script>
						
				</div>
			</div>
		</div>
	</body>
</html>















