<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 " style="text-align: center;">
        <div class="card card-profile" style="background-color:snow;">
            <div class="card-avatar">
              <a href="javascript:;">
                  <?php if(!empty($donnees['avatar'])) { ?>
                  <img src="membres/profil/<?php echo $donnees['avatar'] ?>" width="150px" style="border-radius: 150px"> <?php } ?><br><br>
                </a>
            </div>
            <div class="card-body" >
                <p class="card-description" style="font-size: 25px; "><?php echo "<b>  ".$_SESSION['prenom']. "  ".$_SESSION['nom']. "</b>"?></p>
                <p class="card-description"><?php echo "  ".$_SESSION['mail']; ?></p>
                <p class="card-description"> Numéro de tel:</p>
                <p class="card-description">A propos de moi......</p>
                <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
            </div>             
          </div>
          <div>
            <br>
            <div class="card card-profile">
            <div class="card-body" style="background-color:lightpink">
              <p class="card-description" >Liste des amis en ligne</p>
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
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Company (disabled)</label>
                  <input type="text" class="form-control" disabled>
                </div>
              </div>
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
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Adress</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">City</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Country</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Postal Code</label>
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

  <div class="container-fluid">
    <div class="row">
      <form>
        <label>Prenom</label>
        <input type="text">
        <label>Nom</label>
        <input type="text">
      </form>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>