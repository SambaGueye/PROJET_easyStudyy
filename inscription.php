<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<?php require("header.php") ?>

	<div class="container" style="background-color:white" id="fo">
		<!--<div class="row" >
			<div class="col-sm-12 col-lg-4">-->
				<h2>Inscription</h2>
				<form method="post" id="formulaire" >
					<div class="form-group">
						<label for="exampleInputPassword1">Prenom</label>
						<input type="text" class="form-control" id="exampleInputPassword1" name="prenom" required/>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Nom</label>
						<input type="text" class="form-control" id="exampleInputPassword1" name="nom" required/>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required/>
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password" required/>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirmation Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="repeatpassword" required/>
					</div>
					<button type="submit" class="btn btn-primary" name="inscrire">S'inscrire</button>
				</form>
			<!--</div>
		</div>-->
	</div>

<?php
	/*
	$dbb= new PDO('mysql:host=localhost; dbname=easystudy', 'root', ''); 

	if(isset($_POST['inscrire'])){
		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
		$mail=$_POST['mail'];
		$password=$_POST['password'];

		$sql=$dbb->prepare("INSERT INTO membre (prenom,nom,email,password,avatar)
							VALUES (".$prenom.",".$nom.",".$mail.",".$password.",'');");
		$sql->execute(array($prenom,$nom,$mail,$password));
		/*var_dump($sql);* /
		echo "Inscription effectué";
		header('location: connexion.php');
	}*/

	$serveur="localhost";
	$user = "root";
	$pass = "";
	$bd="easystudy";

	// Initialisation de la connexion
	$conn = @mysqli_connect($serveur, $user, $pass) or die ('Connexion à '.$serveur.' impossible !<br/>');
	mysqli_select_db($conn, $bd) or die ('Accès à la base de donnée '.$bd.' impossible !<br/>');
	

	if(isset($_POST['inscrire'])){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$password=$_POST['password'];
		$repeatpassword=$_POST['repeatpassword'];
		$mail=$_POST['mail'];
		$avatar="default";
		
		if (strlen($password)>=4)
        {
            if ($password==$repeatpassword)
            {

	            $password = md5($password);

				$request='INSERT INTO membre (prenom, nom, email, password, avatar)
						  VALUES ("'.$prenom.'", "'.$nom.'", "'.$mail.'", "'.$password.'", "'.$avatar.'");';

				if(!mysqli_query($conn,$request)){
		            echo "Une erreur s'est produite: ".mysqli_error($conn);
		        } 
		        else{
		            echo "<div class='alert alert-success' role='alert'>Vous êtes inscrit avec succès!</div>";
		            header('location: LandingPage.php');
		        }
			}
			else
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					  <strong>Mot de passe incorrect!</strong> Vérifiez que vous avez correctement tapé votre mot de passe.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					  	<span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
		}
		else
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					  <strong>Mot de passe trop court!</strong> Votre mot de passe doit contenir au moins 4 caractères.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					  	<span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
	}


	mysqli_close($conn);
	?>

	<style>
		body{
			background-color: #f0f5f9;
		}

		#fo{

			text-align: center;
			color: #555555;
			padding: 2rem;
			border-radius: 5px;
			margin-bottom: 25px;
			margin-top: 25px;
		}

		#fo h2
		{
			padding-bottom: 15px;
		}

		form
		{
			display: block;
			margin: 0 auto;
			width: 450px;
		}

		.form-group input
		{
		    transition: 0.3s linear;
		}

		.form-group input:focus
		{
		    border: 1px solid lightblue;
		    box-shadow: 0 0 0 0;
		}

		input
		{
			margin-bottom: 20px;
		}

		input:hover
		{
			box-shadow: 2px 2px 10px #e8e8e8;
		}
	</style>
</body>
</html>