<?php  
  require("fonctions.php"); 
  session_start();
  // S'il y a une session alors on ne retourne plus sur cette page
  if (isset($_SESSION['id'])){
      header('Location: LandingPage.php'); 
      exit;
  }
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

  <?php
    //Traitement du formulaire
    if(isset($_POST['submit']))
    {
      $errors = array(); //tableau d'erreurs rencontrées
      $nom=htmlentities(trim($_POST['nom'])); //trim suppr les espaces
      $prenom=htmlentities(trim($_POST['prenom']));
      $mail=htmlentities(strtolower(trim($_POST['mail'])));
      $password=trim($_POST['password']);
      $repeatpassword=trim($_POST['repeatpassword']);
      $avatar="NULL";
      $niveau="NULL";
      $formation="NULL";

      if (!empty($prenom) && !empty($nom) && !empty($mail) && !empty($password) && !empty($repeatpassword))
      {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
          $errors['mail'] = "Votre mail n'est pas valide!";
        } 
        else
        {
          $request_mail=$pdo->prepare('SELECT email FROM membre WHERE email=?');
          $request_mail->execute(array($mail));
          $user = $request_mail->fetch();
          if($user)
          {
            $errors['mail'] = "Ce mail est délà utilisé pour un autre compte!";
          }
        }
        
        if (strlen($password)<4)
        {
          $errors['password'] = "Votre mot de passe doit contenir au moins 4 caractères!";
        }

        if ($password!=$repeatpassword)
        {
          $errors['repeatpassword'] = "La confirmation du mot de passe ne correspond pas.";
        }

        // Si toutes les conditions sont remplies alors on fait le traitement
        if(empty($errors))
        {
          $password = md5($password);
          $request = $pdo->prepare("INSERT INTO membre (prenom, nom, email, password, avatar, niveau, formation, statut)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

          $res=$request->execute([$nom, $prenom, $mail, $password, $avatar, $niveau, $formation,  'professeur']);

            header('location: connexion.php');
            exit;
        }
      }
      else
      {
        $errors['champs'] = "Veuillez saisir tous les champs!";
      }
    }
  ?>

  <div class="container">
    <div class="login-form">
      <div class="logo">
        <h1><a href="#">EasyStudy</a></h1>
      </div>

      <div class="col-xs-12 col-s-12 col-md-8 col-lg-6 main-div">
        <h1>Inscription</h1>

        <?php 
          if (isset($errors['champs']))
            AfficherErreur($errors['champs']);
        ?>

        <form method="post">
          <div class="form-group">
            <p>Vous êtes un <strong>Professeur. </strong><a href="inscription.php"> Modifier?</a></p>
          </div>

          <div class="form-group">
            <?php 
              if (isset($errors['prenom']))
                AfficherErreur($errors['prenom']);
            ?>
            <input type="text" class="form-control" id="inputFirstName" name="prenom" placeholder="Prénom" required />
          </div>

          <div class="form-group">
            <?php 
              if (isset($errors['nom']))
                AfficherErreur($errors['nom']);
            ?>
            <input type="text" class="form-control" id="inputName" name="nom" placeholder="Nom" required />
          </div>

          <div class="form-group">
            <?php 
              if (isset($errors['mail']))
                AfficherErreur($errors['mail']);
            ?>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="E-Mail" name="mail" required/>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <?php 
              if (isset($errors['password']))
                AfficherErreur($errors['password']);
            ?>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Mot de passe" required/>
          </div>

          <div class="form-group">
            <?php 
              if (isset($errors['repeatpassword']))
                AfficherErreur($errors['repeatpassword']);
            ?>
            <input type="password" class="form-control" id="InputPassword" name="repeatpassword" placeholder="Confirmer le mot de passe" name="repeatpassword" required />
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Inscription</button>
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
