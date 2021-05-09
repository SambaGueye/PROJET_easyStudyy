<?php
require_once('Controleurs/EtudiantController.php');


if (isset($_GET["url"])) {
	switch ($_GET["url"]) {
		case "inscriptionEtudiant":
			include("vues/inscriptionEtudiant.php");
			break;
		case "addEtudiant": {
				$etudiant = new etudiantController();
				$etudiant->addEtudiant();
				break;
			}
	}
} else {
	include("vues/connexion.php");
}
