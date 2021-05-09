<?php
require_once('models/EtudiantModel.php');
class EtudiantController
{
    public function addEtudiant()
    {
        if (isset($_POST['submit'])) {
            $errors = "";
            $niveau = htmlentities(trim($_POST['niveau']));
            $formation = htmlentities(trim($_POST['formation']));
            $nom = htmlentities(trim($_POST['nom'])); //trim suppr les espaces
            $prenom = htmlentities(trim($_POST['prenom']));
            $mail = htmlentities(strtolower(trim($_POST['mail'])));
            $password = trim($_POST['password']);
            $repeatpassword = trim($_POST['repeatpassword']);
            $avatar = "default";

            if (!empty($niveau) && !empty($formation) && !empty($prenom) && !empty($nom) && !empty($mail) && !empty($password) && !empty($repeatpassword)) {
                $etudiant = new EtudiantModel();
                $etudiant->addEtudiant($prenom, $nom, $mail, $password, $niveau, $formation);
                header('location:connexion.php');
            } else {
                $errors = "ERREUR/ Veuillez renseigner tous les champs";
                include('vues/inscriptionEtudiant.php');
            }
        }
    }
}
