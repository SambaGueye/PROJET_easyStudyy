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

                <?php if (isset($errors)) echo "<div class='alert alert-danger'>" . $errors . "</div>"; ?>

                <form method="post" action="index.php?url=addEtudiant">
                    <div class="form-group">
                        <p>Vous êtes un <strong>Étudiant. </strong> <a href="inscription.php"> Modifier?</a></p>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="niveau" required />
                        <option selected disabled>Niveau</option>
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" name="formation" placeholder="Formation ex : MIASHS" required />
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" id="inputFirstName" name="prenom" placeholder="Prénom" />
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" id="inputName" name="nom" placeholder="Nom" required />
                    </div>

                    <div class="form-group">

                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="E-Mail" name="mail" required />
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Mot de passe" required />
                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" id="InputPassword" name="repeatpassword" placeholder="Confirmer le mot de passe" name="repeatpassword" required />
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Inscription</button>
                </form>

                <div class="register_link">
                    <p>
                        Vous avez déjà un compte
                        <a href="index.php">Se connecter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>