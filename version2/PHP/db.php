<?php
	// D�finitions de constantes pour la connexion � MySQL
	$SERVEUR = 'localhost';
	$BASE = 'gsb';
	$NOM = 'btssio';
	$MOTPASSE = 'Azerty31';


	// Connexion � la base de donn�es
	try {
		$connexion= new PDO('mysql:dbname=gsb;host=localhost',$NOM,$MOTPASSE) ;
	} catch ( Exception $e ) {
		echo"25868644";
		die ("\n Connection � ".$SERVEUR." impossible :  ".$e->getMessage());
	}

?>
