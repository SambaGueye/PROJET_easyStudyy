<?php  
  require("fonctions.php"); 
  session_start();
  $pdo= new PDO('mysql:host=localhost; dbname=easystudy', 'root', ''); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>réinitialiser mot de passe</title>
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body class="LoginForm">
  
  <?php 
    if(isset($_POST['submit']))
    {
      $mail=htmlspecialchars(strtolower(trim($_POST['mail'])));
      $errors=array();
      if(!empty($mail)) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $sql=$pdo->prepare("SELECT * from membre where email=?");
                $sql->execute(array($mail));

                $user=$sql->rowCount();

                if($user==1){
                    $_SESSION['mail'] = $mail;
                    $code = "";
                    for ($i=0; $i < 8; $i++) { 
                        $code .= mt_rand(0,9);
                    }
                    $_SESSION['code'] = $code;

                    $headers =  'From: "EasyStudy.com"<nachinsophia@gmail.com>'."\n";
                    $headers =  'Content-type:text/html; charset="utf-8"'."\n";
                    $headers =  'Content-Transfer-Encoding: 8bit';

                    $subject = "Reinitialisation de votre mot de passe";
                    $message = '<!DOCTYPE html><html><body>Cliquer <a href="http://127.0.0.1/edsa-EasyStudy/mdp.php?section=code&code='.$code.'">ici</a> pour réinitialiser votre mot de passe</body></html>';
                    
                  
                    mail($mail,$subject,$message,$headers);
                    print "mail succesuffully sent";
                } 
                else
                    $errors['compte'] = "Cette adresse mail n'est pas enregistrée!";
            }
            else
                $errors['mail'] = "Adresse mail invalide";
        }
        else
            $errors['champs'] = "Veuillez saisir l'adresse mail";  
    }
    
    
  ?>

  <div class="container">
    <div class="login-form">
      <div class="logo">
        <h1><a href="#">EasyStudy</a></h1>
      </div>

      <div class="col-xs-12 col-s-12 col-md-8 col-lg-6 main-div">
        <h1>Réinitialiser votre mot de passe</h1>
        <p>Veuillez saisir votre adresse e-mail.</p>    

        <form method="post">
          <?php 
            if (isset($errors['champs']))
              AfficherErreur($errors['champs']);
            if (isset($errors['compte']))
              AfficherErreur($errors['compte']);
            if (isset($errors['mail']))
              AfficherErreur($errors['mail']);
          ?>

          <div class="form-group">
          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-Mail" name="mail" required/>
          </div>    

          <button type="submit" class="btn btn-primary" name="submit">Réinitialisater</button>

          <div class="register_link">
            <p>
              <a href="connexion.php">Retour à la page de connexion</a>
            </p>
          </div>
        </form>
      </div> 
    </div>
  </div>
</body>
</html>