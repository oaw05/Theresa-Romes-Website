<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Kalender - Theresa Maria Romes</title>
		<meta charset="utf-8">
		<meta name="description" content="In diesem Kalender befinden sich alle anstehenden Termine von Theresa Romes.">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<!-- CSS einbinden -->
		<link href="style.css" rel="stylesheet" media="(min-width: 950px)" type="text/css">
		<link href="style_mobile.css" rel="stylesheet" media="(max-width: 950px)" type="text/css">
		
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
					
					<table>
						<?php
							$kalender = file("Kalender.txt");
							
							/* Tabelle füllen: vorher überprüfen, ob Info da ist oder nicht (= &nbsp;). */
							/* Bei dem Vergleich der Strings ist der Wert komischerweise immer um 2 zu hoch,
							deswegen wird da jedes mal -2 gemacht. */
							
							for ($i=8; $i < count($kalender)+1; $i=$i+8) {
								/* $datetime1 = new DateTime('2009-10-11'); */
								$temp = $kalender[$i];
								$day = substr($temp, 4, -10); /* auch hier muss jeweils bei der rechten Grenze +2 bzw. hier -2 gerechnet werden */
								$month = substr($temp, 7, -7);
								$year = substr($temp, 10, -2);
								$date_event = new DateTime($year."-".$month."-".$day);
								
								if ($date_event < new DateTime("yesterday")) { /* mit DateTime("now") hats Veranstaltungen von heute rausgeschmissen */
									continue;
								}
								
								echo "<tr class='table_body'>";
								if (strcmp($kalender[$i],"&nbsp;")-2 !== 0) {
									echo "<td class='kalender_table_links'>".$kalender[$i]."</td>"; /* Datum */
								} else {
									echo "<td class='kalender_table_links'></td>";
								}
								if (strcmp($kalender[$i+1],"&nbsp;")-2 !== 0) {
									echo "<td class='kalender_table_mitte'><b>".$kalender[$i+1]."</b><br>"; /* Titel */
								} else {
									echo "<td class='kalender_table_mitte'><br>";
								}
								if (strcmp($kalender[$i+2],"&nbsp;")-2 !== 0) { /* Beschreibung */
									echo $kalender[$i+2]."<br>";
								} else {
									echo "";
								}
								if (strcmp($kalender[$i+3],"&nbsp;")-2 !== 0) { /* mit Person X */
									echo $kalender[$i+3]."</td>";
								} else {
									echo "</td>";
								}
								if (strcmp($kalender[$i+4],"&nbsp;")-2 !== 0) { /* Uhrzeit */
									echo "<td class='kalender_table_rechts'>".$kalender[$i+4]."<br>";
								} else {
									echo "<td class='kalender_table_rechts'>";
								}
								if (strcmp($kalender[$i+5],"&nbsp;")-2 !== 0) { /* Stadt */
									echo $kalender[$i+5]."<br>";
								} else {
									echo "";
								}
								if (strcmp($kalender[$i+6],"&nbsp;")-2 !== 0) { /* Location */
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















