<?php 
	require("fonctions.php"); 
	session_start();
	$pdo= new PDO('mysql:host=localhost; dbname=easystudy', 'root', ''); 
	if(isset($_GET['id']) and $_GET['id']>0){
		if(isset($_SESSION['id']) and $_GET['id'] == $_SESSION['id']){
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/styleAnnuaire.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>annuaire</title>
</head>
<body>
<!-- Importation du header (barre de navigation) -->
<?php require("header.php"); ?>
        
    <div class="container">
        <!-- Affichage des étudiants en master MIAGE -->
        <h2 style="text-align:center">Liste des étudiants en L3 MIAGE</h2>
       <div class="row"> 
            <?php $sql=$pdo->query("SELECT * from membre where niveau='L3'");
	        while($donnees=$sql->fetch()) {    ?>
                <div class="col-sm-12 col-lg-4 col-md-6" id='main-card'>
                    <div class="card" id="carte" style="width: 17rem;">
                        <img src="membres/profil/<?php echo $donnees['avatar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $donnees['prenom']." ".$donnees['nom'] ?> </h5>
                            <p class="card-text"><?php echo $donnees['email']?></p>
                            <a href="#" class="btn btn-primary">Voir profil</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <!-- Les etudiants de la L3 MIAGE-->
        <h2 style="text-align:center">Liste des étudiants en Master MIAGE</h2>
       <div class="row"> 
            <?php $sql=$pdo->query("SELECT * from membre where niveau='M%'");
	        while($donnees=$sql->fetch()) {    ?>
                <div class="col-sm-12 col-lg-4 col-md-6" id='main-card'>
                    <div class="card" id="carte" style="width: 17rem;">
                        <img src="https://www.ut-capitole.fr/medias/photo/iejuc_1510146005333-png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $donnees['prenom']." ".$donnees['nom'] ?> </h5>
                            <p class="card-text"><?php echo $donnees['email']?></p>
                            <a href="#" class="btn btn-primary">Voir profil</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div> 









<style type="text/css">
.card-img-top {
    height:9em;
    width: 9em;
    border-radius: 90px;  
    transition: 1s ease all;  
}

.card-img-top:hover {
    transition: 1s ease all;
    height:11em;
    width: 11em;
    border-radius: 155px;    
}
</style>
</body>
</html>

<?php }} ?>

