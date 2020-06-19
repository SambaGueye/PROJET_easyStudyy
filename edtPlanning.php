<?php
session_start(); 
$idd=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/edtStyle.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<?php require("header.php") ?>
	<?php
	$dbb= new PDO('mysql:host=localhost; dbname=projet', 'root', ''); 

	if(isset($_POST['sub'])){
		$nomT=$_POST['nomT'];
		$descT=$_POST['descT'];
		if(!empty($nomT) && !empty($descT)){
			$sql=$dbb->prepare("INSERT into tache (nomT,descriptionT,idUser) values (?,?,?)");
			$sql->execute(array($nomT,$descT,$_SESSION['id']));
			$succes= "Tache ajoutée avec succès";
		}
		else {
			$error= "Veuillez remplir tous les champs";
		}
	}
	
?>
<!-- Ajout de la Todo-List -->
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-6">
			<h3>Planning - Ajouter des taches à faire</h3>
			<form method="post">
				<div class="form-group">
					<label for="exampleFormControlInput1">Nom tache</label>
					<input type="text" class="form-control" name="nomT" >
				</div>
					  
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Description</label>
					<textarea class="form-control" name="descT" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" name="sub">Ajouter</button>
			</form><br>
			<?php  if(isset($succes)) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $succes; ?>
				</div>
			<?php } ?>
			<?php  if(isset($error)) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $error; header('location:edtPlanning.php');?>
				</div>
			<?php } ?>
		</div>
		<div class="col-sm-12 col-lg-6">
			<div class="card card-profile">
          		<div class="card-body" style="background-color:lightpink">
            		<p class="card-description" >Liste des amis en ligne</p>
              		.......
          		</div>             
        	</div>
		</div>	
		
	</div>
</div>

<!--Suppression de tache -->
<div>
<?php
if(isset($_GET['del_task'])){
		$id = $_GET['del_task'];
		echo $id;
		
		$sql=$dbb->query("DELETE from tache where id=$id");
		
	}
?>
</div>


<!-- Affichage de la Todo-List -->

<div class="container">
  <div class="row">
  	<div class="card-body">
    	<div class="tab-content">
        	<div class="tab-pane active" id="profile">
            	<table class="table">
            		<tbody>
               		 	<tr>
                			<td style="color: red;" >Titre</td>
                			<td style="color: red;" >DESCRIPTION</td></tr>
                		<?php require_once('logDb.php'); $sql=$dbb->query("SELECT * FROM tache where idUser=$idd"); 
                    	while($donnees=$sql->fetch()){
                		?>
                		<tr>
                			<td><?php echo $donnees['nomT'];?></td>
                			<td><?php echo $donnees['descriptionT'];?></td>
                			<td class="td-actions text-right">
                    			<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="text-decoration: none;">
                    			<i class="material-icons" style="color: white;">Modifier</i>
                    			</button>
                    			<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" style="text-decoration: none;" >
                   				<a href='edtPlanning.php?del_task=<?php echo $donnees['id'] ?>' onclick="return confirm('Etes vous sur de vouloir supprimer cette tache? Cette action est irréversible')" class="material-icons" style="color: white; text-decoration: none">Supprimer</a>
                   				 </button>
                			</td>
                		</tr>
                    	<?php } ?>
                          
            		</tbody>
            	</table>
        	</div> 
        </div>
    </div>
  </div>
</div>
	






</body>
</html>