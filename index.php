<?php
	
	require_once "includes/limonade.php";
	//require_once 'lib/getData.php';
	option('limonade_dir', 'includes/');

	dispatch("/", "fichiers_afficher");
	dispatch("/fichiers", "fichiers_afficher");
	dispatch("/promotions", "promotions_afficher");
	dispatch("/donnees", "donnees_afficher");

//Affichage des erreurs PHP, à ôter une fois le projet rendu
	ini_set('display_errors', 1);
	error_reporting(E_ALL); 
//test, à supprimer
	

	run();
?>