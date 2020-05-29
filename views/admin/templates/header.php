<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Ici se trouvent les métadonnées pour le navigateur -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
    <title>Administration - CDA Hotel Nice</title>
    <meta
        name="description"
        content="Ce petit paragraphe sera affiché dans les SERP, juste sous le titre des pages."
    />

    <!-- Ici se trouvent les liens vers les fichiers favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_DIR;?>apple-touch-icon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_DIR;?>favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_DIR;?>favicon-16x16.png"/>
	<link rel="manifest" href="<?php echo SITE_DIR;?>site.webmanifest"/>
	<meta name="msapplication-TileColor" content="#da532c"/>
	<meta name="theme-color" content="#ffffff"/>

	<!-- Ici se trouvent les liens vers les feuilles de styles -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"/>
	<link rel="stylesheet" href="<?php echo SITE_DIR;?>assets/css/managment.min.css" />

	<!-- Script Javascript -->
	<script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
	<script>
		function burger() {
		  let nav = document.getElementById("mainNav");
		  if (nav.style.display === "inline") {
			 nav.style.display = "";
		  } else {
			nav.style.display = "inline";
		  }
		}
	</script>
</head>
<body>
    <header>
        <a href="index.html"><img src="../assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
        <h1><a href="index.html">Administration</a></h1>
        <nav>
			<ul>
				<li><a href="">Tableau de bord</a></li>
				<li><a href="">R&eacute;servations</a></li>
				<li><a href="<?php echo SITE_DIR;?>admin/listechambres">Chambres</a></li>
				<li><a href="">Clients</a></li>
				<li><a href="">Mon compte</a></li>
			</ul>
        </nav>
		<a href="javascript:void(0);" class="burger" onclick="burger()">
			<i class="fa fa-bars"></i>
		</a>
    </header>

    <main>