<!DOCTYPE html>
<html>
	<head lang="de">
		<title>Vita - Theresa Maria Romes</title>
		<meta charset="utf-8">
		<meta name="description" content="Ausführliche Vita von Theresa Romes.">
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
					<img src="img/Vita.png" alt="Vita" class="nav_bild">	
				</div>
				
				<nav class="navigation vertical">
					<ul>
						<li>
							<a href="home.php" title="Home">Home</a>
						</li>
						<li>
							<a href="vita.php" title="Vita" class="active">Vita</a>
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
					<h3>Vita</h3>
					
					<?php
						$vita = file_get_contents("Vita.txt");
						echo $vita;
					?>
					
					<p><b>Bitte verwenden Sie nur diese Biographie und vernichten Sie Material älteren Datums.</b><br><br></p>
					
					<img class="pdf_icon" src="img/pdf.png" alt=""></img>
					<a href="Theresa_Romes_Vita.pdf" title="Theresa Romes Vita">Theresa_Romes_Vita.pdf (<?php echo downloadsize("Theresa_Romes_Vita.pdf"); ?>)</a>
					
					<?php
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
					
				</div>
			</div>
		</div>
	</body>
</html>















