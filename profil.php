<?php
session_start(); 
$idd=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/styleProfil.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
	<?php require("header.php")  ?>
	<?php 
		$idd= $_SESSION['id'];
		$dbb= new PDO('mysql:host=localhost; dbname=easystudy', 'root', ''); 
		$image=$dbb->query("SELECT avatar from membre where idUser=$idd");
		$donnees=$image->fetch();
  ?>
  <br>
  <div class="container" id="mainProfil">
    <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 " style="text-align: center;">
        <div class="card carte card-profile" >
            <div class="card-avatar">
              <a href="javascript:;">
                  <?php if(!empty($donnees['avatar'])) { ?>
                    <img id="photoo" src="membres/profil/<?php echo $donnees['avatar'] ?>" width="130px" style="border-radius: 150px">
                    <div>
                    <label id="icone" for="file">
                      <i id="ic" class="fas fa-camera"></i>
                      <form  method="post" enctype="multipart/form-data">
                        <input type="file" id="file" style="display: none;"  name="avatar">
                        <input type="submit" name="majPP"> 
                      </form>
                    </label>
                     <?php } else { ?> 
                  </div>   
                    <img id="photoo" src="images/avatarr.png">
                  <div >
                    <label id="icone" for="file">
                      <i id="ic" class="fas fa-camera"></i>
                      <form  method="post" enctype="multipart/form-data">
                        <input type="file" id="file" style="display: none;"  name="avatar">
                        <input type="submit" name="majPP"> 
                      </form>
                    </label>
                    <?php } ?>
                  </div>   
              </a>
            
            <div class="card-body" >
                <p class="card-description" style="font-size: 25px; "><?php echo "<b>  ".$_SESSION['prenom']. "  ".$_SESSION['nom'].  "</b>"?></p>
                <p class="card-description"><?php echo "  ".$_SESSION['mail']; ?></p>
                <p class="card-description"> Formation : <?php echo "<b>  ".$_SESSION['formation']. "</b>"; ?> </p>
                <p class="card-description">Niveau : <?php echo "<b>  ".$_SESSION['niveau']. "</b>"; ?></p>
                <p class="card-description">Statut: <?php echo "<b>  ".$_SESSION['statut']. "</b>"; ?></p>
                <a href="javascript:;" class="btn btn-primary btn-round">Message</a>
            </div> </div>            
          </div>
          <div>
            <br>
            <div class="card card-profile">
            <div class="card-body" style="background-color:lightpink">
              <p class="card-description" id="pagee" >Liste des amis en ligne</p>
                .......
            </div>             
          </div>
          </div>
      </div>
      <div class="col-sm-12 col-lg-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Edit Profile</h4>
          <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email address</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Fist Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name 2</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
               
               
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <div class="form-group">
                        <textarea class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>


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
  else echo "heyyy";
}


?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>