<!DOCTYPE html>
<html>

<head>
    <title>Se connecter à EasyStudy</title>
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
                <h1>Connexion</h1>

                <form method="post">
                    <?php
                    if (isset($errors['champs']))
                        AfficherErreur($errors['champs']);

                    if (isset($errors['compte']))
                        AfficherErreur($errors['compte']);
                    ?>

                    <div class="form-group">
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-Mail" name="mail" required />
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password" required />
                    </div>

                    <div class="forgot">
                        <a href="mdp.php">Mot de passe oublié?</a>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Connexion</button>

                    <div class="register_link">
                        <p>
                            Pas encore de compte?
                            <a href="?url=inscriptionEtudiant">S'inscrire</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>