<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <script type="text/javascript" src="../javascript/date_heure.js"></script>
    <title>Admin</title>
</head>
<body style="margin: 0;">

<!-- Inclusion PHP -->
<?php require("../header.php");
    require_once("../logDb.php");
?>

<!-- Fin inclusion PHP -->
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-sm-12 col-lg-12">
                <span id="date_heure"></span>
                <script type="text/javascript">window.onload = date_heure('date_heure');</script>
            </div>
        </div>
    </div>
            

    <div class="conainer">
        <div class="row" style="text-align: center;">
            <div class="col-sm-12 col-lg-12" style="text-align:center;">
                
                <p style="font-size:40px;">Bienvenue dans votre espace d'administration</p>
            </div>
        </div>
    </div>

    <div class="conainer">
        <div class="row" style="text-align: center;">
            <div class="col-sm-12 col-lg-4 admin">
                <p style="font-size:40px;">Setting Admin</p>
                <img src="../images/adminn.png" style="height:50%; width:35%;"><br><br>
                <a href="" type="button" class="btn btn-primary">Ajouter un administrateur</a><br><br>
                
            </div>
            <div class="col-sm-12 col-lg-4 user">
                <p style="font-size:40px;">Setting Users</p>
                <img src="../images/user.png" style="height:50%; width:35%;"><br><br>
                <a href="addUser.php" type="button" href="google.com" class="btn btn-secondary" style="width:208px;">Ajouter un utilisateur</a><br><br>
                <a href="gestionUser.php" type="button" class="btn btn-info" style="width:208px;">Gérer les utilisateurs</a><br><br><br><br>
            </div>
            <div class="col-sm-12 col-lg-4 stat">
                <p style="font-size:40px;">Les statistiques</p>
                <img src="../images/stat.jpg" style="height:50%; width:35%;"><br><br>
                <a href="" type="button" class="btn btn-dark" style="width:208px;">Les statistiques</a>
            </div>
        </div>
    </div>
    

<style>
    .admin {
        background-color: lightgrey;
    }
    .user {
        background-color: wheat;
    }
    
</style>    

<script>
    
    
</script>

    
</body>
</html>