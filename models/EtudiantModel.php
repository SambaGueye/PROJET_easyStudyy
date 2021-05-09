<?php
require_once('models/Model.php');

class EtudiantModel extends Model
{



    public function addEtudiant($prenom, $nom, $email, $password, $niveau, $formation)
    {
        $model = new Model();
        $pdo = $model->bdConnect();
        $request = $pdo->prepare("INSERT INTO membre (prenom, nom, email, password, niveau, formation, statut)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");
        $res = $request->execute([$prenom, $nom, $email, $password, $niveau, $formation, "etudiant"]);
    }
}
