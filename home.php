<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Home - Theresa Maria Romes</title>
		<meta charset="utf-8">
		<meta name="description" content="Startseite mit Begrüßung und aktuellen Terminen.">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<!-- CSS einbinden -->
		<link href="style.css" rel="stylesheet" media="(min-width: 950px)" type="text/css">
		<link href="style_mobile.css" rel="stylesheet" media="(max-width: 950px)" type="text/css">
		
		<!-- Google Fonts einbinden -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic|Istok+Web:400,400italic,700' rel='stylesheet' type='text/css'>
	
	</head>
	<body>
		<div class="container">
			<aside>
			
				<!-- Navigation & Bild -->
				<div class="nav_bild_container">	
					<img src="img/Home.png" alt="Home" class="nav_bild">	
				</div>
				
				<nav class="navigation vertical">
					<ul>
						<li>
							<a href="home.php" title="Home" class="active">Home</a>
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
					<div class="welcome">
						<!-- <h3>Willkommen auf meiner Webseite!</h3> -->		
						<b>Herzlich Willkommen auf meiner Webseite!</b><br>
						<p>Ich möchte Sie recht herzlich auf meiner Webseite begrüßen und wünsche Ihnen viel Spaß beim Lesen, 
						Anschauen, Anhören und Durchstöbern! Nehmen Sie gerne Kontakt mit mir auf, ich freue mich über Ihre Nachricht!
						<br><br>
						Außerdem lade ich Sie herzlich zu meinen Konzerten ein - es wäre mir ein Vergnügen, Sie einmal dort anzutreffen!
						<br><br>
						Freundliche Grüße,</p>
								
						<img src="img/unterschrift.jpg" alt="Theresa Romes" width="80%">
					</div>
					<aside class="aside-right">
						<b>Kommende Termine</b>
						<br/>
						<hr>
						<?php
							$termine = file("Kalender.txt");
														
							for($i=8, $j=31;$i < $j; $i=$i+8){
								
								/* $datetime1 = new DateTime('2009-10-11'); */
								$temp = $termine[$i];
								$day = substr($temp, 4, -10); /* auch hier muss jeweils bei der rechten Grenze +2 bzw. hier -2 gerechnet werden */
								$month = substr($temp, 7, -7);
								$year = substr($temp, 10, -2);
								$date_event = new DateTime($year."-".$month."-".$day);
									
								if ($date_event < new DateTime("yesterday")) { /* mit DateTime("now") hats Veranstaltungen von heute rausgeschmissen */
									$j = $j+8;
									continue;
								}
								
								if (strcmp($termine[$i],"&nbsp;")-2 !== 0) {
									echo $termine[$i]."<br>";
								} else {
									echo "";
								}
								if (strcmp($termine[$i+1],"&nbsp;")-2 !== 0) {
									echo "<b><a href='kalender.php' class='home_link'>".$termine[$i+1]."</a></b><br>";
								} else {
									echo "";
								}
								if (strcmp($termine[$i+2],"&nbsp;")-2 !== 0) {
									echo $termine[$i+2]."<br>";
								} else {
									echo "";
								}
								if (strcmp($termine[$i+5],"&nbsp;")-2 !== 0) {
									echo $termine[$i+5]."<br><hr>";
								} else {
									echo "";
								}
							}
						?>
					</aside>
				</div>
			</div>
		</div>
	</body>
</html>















