<?php
 /* session_start();
  // S'il y a une session alors on ne retourne plus sur cette page
  /*if (isset($_SESSION['id'])){
      header('Location: LandingPage.php'); 
      exit;
  }*/
  $pdo= new PDO('mysql:host=localhost; dbname=easystudy', 'root', ''); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>S'inscrire à EasyStudy</title>
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body class="LoginForm">
  <div class="container">
    <div class="login-form">
      <div class="logo">
        <h1><a href="#">EasyStudy</a></h1>
      </div>

      <div class="col-xs-12 col-s-12 col-md-8 col-lg-6 main-div">
        <h1>Inscription</h1>

        <form method="post">

          <div class="form-group">
            <p>Vous êtes un :</p>
          </div>
          
          <div class="form-group">
            <div class="container">
              <div class="row">
                <div class="col">
                  <a href="InscriptionEtudiant.php" class="styled-form-button">
                    <img src="images/student.png">
                    <span id="form-text">Étudiant</span>
                  </a>
                </div>
                <div class="col">
                  <a href="InscriptionProfesseur.php" class="styled-form-button">
                  <img src="images/teacher.png">
                  <span id="form-text">Professeur</span>
                </a>
                </div>
              </div>
            </div>
          </div>
        </form>

        <div class="register_link">
          <p>
            Vous avez déjà un compte
            <a href="connexion.php">Se connecter</a>
          </p>
        </div>
      </div> 
    </div>
  </div> 
     
</body>
</html>
