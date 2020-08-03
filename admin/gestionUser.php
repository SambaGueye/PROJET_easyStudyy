<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    

    <!-- Inclusion PHP -->
<?php require("../header.php");
    require_once("../logDb.php");
?>

<!-- Fin inclusion PHP -->

<!--Liste des profs -->
<h3 style="text-align: center;">Liste des profs</h3>
<div class="container">
  <div class="row">
  	<div class="card-body">
    	<div class="tab-content">
        	<div class="tab-pane active" id="profile">
            	<table class="table">
            		<tbody>
               		 	<tr>
                			<td style="color: red;" >ID </td>
                            <td style="color: red;" >Prénom</td>
                            <td style="color: red;" >NOM</td>
                        </tr>
                		<?php $sql=$dbb->query("SELECT * FROM membre"); 
                    	while($donnees=$sql->fetch()){
                		?>
                		<tr>
                			<td><?php echo $donnees['idUser'];?></td>
                			<td><?php echo $donnees['prenom'];?></td>
                			<td><?php echo $donnees['nom'];?></td>
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
<!--Liste des prof -->


<!--Liste des étudiants (Users simple) -->
<h3 style="text-align: center;">Liste des étudiants</h3>
<div class="container">
  <div class="row">
  	<div class="card-body">
    	<div class="tab-content">
        	<div class="tab-pane active" id="profile">
            	<table class="table">
            		<tbody>
               		 	<tr>
                			<td style="color: red;" >ID</td>
                            <td style="color: red;" >Prénom</td>
                            <td style="color: red;" >NOM</td>
                        </tr>
                		<?php $sql=$dbb->query("SELECT * FROM membre "); 
                    	while($donnees=$sql->fetch()){
                		?>
                		<tr>
                			<td><?php echo $donnees['idUser'];?></td>
                			<td><?php echo $donnees['prenom'];?></td>
                			<td><?php echo $donnees['nom'];?></td>
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
<!--Liste des étudiants (Users simple) -->


</body>
</html>