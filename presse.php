<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Presse - Theresa Maria Romes</title>
		<meta charset="utf-8">
		<meta name="description" content="Das sagt die Presse über die Sängerin Theresa Romes.">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
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
					<img src="img/Presse.png" alt="Presse" class="nav_bild">	
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
							<a href="media.php" title="Media">Media</a>
						</li>
						<li>
							<a href="presse.php" title="Presse" class="active">Presse</a>
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
					<h3>Presse</h3>
					
					<table class="table_presse">
						<?php
							$presse = file("Presse.txt");
										
							for ($i=5; $i < count($presse)+1; $i=$i+5) {
								if (strcmp($presse[$i],"&nbsp;")-2 !== 0) {
									echo "<tr class='table_body'>";
									echo "<td class='presse_table_links'>".$presse[$i]."<br>".$presse[$i+1]."</td>";
									echo "<td class='presse_table_rechts'><b>".$presse[$i+2]."</b><br>";
									echo "<p>".$presse[$i+3]."</p></td>";
									echo "</tr>";
								} else {
									echo "Klappt nicht so ganz ...";
								}
							}
						?>
					</table>
					
				</div>
			</div>
		</div>
	</body>
</html>















