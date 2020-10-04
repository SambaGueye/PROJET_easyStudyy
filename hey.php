<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$dbb= new PDO('mysql:host=localhost; dbname=easystudy', 'root', '');

if(isset($_POST['majPP'])){
	if(isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])){
		$tailleMax= 2097152;
        $extensionValide = array('jpg', 'png', 'gif', 'jpeg');
        var_dump($extensionValide);
		if($_FILES['avatar']['size']<=$tailleMax){
			$extensionUpload= strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
			if(in_array($extensionUpload, $extensionValide)){
				$chemin="membres/profil/".$_SESSION['id'].".".$extensionUpload;
                $resultat=move_uploaded_file($_FILES['avatar']['tmp_name'] , $chemin);
                
				if($resultat){
					$updateAvatar= $dbb->prepare('UPDATE membre SET avatar= :avatar WHERE idUser= :id');
					$updateAvatar->execute(array(
						'avatar'=> $_SESSION['id'].".".$extensionUpload,
						'id' => $_SESSION['id']
					));
					header('location: profil.php');
				}
				else { $msg = "Erreur pendant l'importation de votre fichier"; }
			}else { $msg = "Votre photo doit etre en format jpg, gif, png ou jpeg"; }
		}
		else {$msg = "Votre photo de profil ne doit pas dépasser 2Mo"; }

	}
}


?>

</body>
</html>