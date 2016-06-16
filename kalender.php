<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Home - Theresa Maria Romes</title>
		<meta charset="utf-8">
		
		<!-- CSS einbinden -->
		<link href="style.css" rel="stylesheet" type="text/css">
		
		<!-- Google Fonts einbinden -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic|Istok+Web:400,400italic,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Satisfy|Playball|Great+Vibes|Parisienne' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">
			<aside>
			
				<!-- Navigation & Bild -->
				<div class="nav_bild_container">	
					<img src="img/Kalender.png" alt="Kalender" class="nav_bild">	
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
							<a href="kalender.php" title="Kalender" class="active">Kalender</a>
						</li>
						<li>
							<a href="repertoire.php" title="Repertoire">Repertoire</a>
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
					<h3>Kalender</h3>
					
					<table class="">
						<?php
							$kalender = file("Kalender.txt");
							
							/* Tabelle füllen: vorher überprüfen, ob Info da ist oder nicht (= &nbsp;). */
							/* Bei dem Vergleich der Strings ist der Wert komischerweise immer um 2 zu hoch,
							deswegen wird da jedes mal -2 gemacht. */
							
							for ($i=8; $i < count($kalender)+1; $i=$i+8) {
								echo "<tr class='table_body'>";
								if (strcmp($kalender[$i],"&nbsp;")-2 !== 0) {
									echo "<td class='kalender_table_links'>".$kalender[$i]."</td>";
								} else {
									echo "<td class='kalender_table_links'></td>";
								}
								if (strcmp($kalender[$i+1],"&nbsp;")-2 !== 0) {
									echo "<td class='kalender_table_mitte'><b>".$kalender[$i+1]."</b><br>";
								} else {
									echo "<td class='kalender_table_mitte'><br>";
								}
								if (strcmp($kalender[$i+2],"&nbsp;")-2 !== 0) {
									echo $kalender[$i+2]."<br>";
								} else {
									echo "";
								}
								if (strcmp($kalender[$i+3],"&nbsp;")-2 !== 0) {
									echo $kalender[$i+3]."</td>";
								} else {
									echo "</td>";
								}
								if (strcmp($kalender[$i+4],"&nbsp;")-2 !== 0) {
									echo "<td class='kalender_table_rechts'>".$kalender[$i+4]."<br>";
								} else {
									echo "<td class='kalender_table_rechts'>";
								}
								if (strcmp($kalender[$i+5],"&nbsp;")-2 !== 0) {
									echo $kalender[$i+5]."<br>";
								} else {
									echo "";
								}
								if (strcmp($kalender[$i+6],"&nbsp;")-2 !== 0) {
									echo $kalender[$i+6]."</td>";
								} else {
									echo "</td>";
								}
								echo "</tr>";	
							}
						?>
					</table>
					
				</div>
			</div>
		</div>
	</body>
</html>















