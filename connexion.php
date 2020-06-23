<?php  require("header.php");

session_start();
$dbb= new PDO('mysql:host=localhost; dbname=easystudy', 'root', ''); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<form method="post" id="formulaire">
				<h2>Connexion</h2>
				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required/>
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password" required/>
				</div>
			 	<button type="submit" class="btn btn-primary" name="submit">Connecter</button>
			</form>
		</div>
	</div>

	<!--<p><?/*php if(isset($erreur)){ echo $erreur;} */?></p>-->

	<?php 

	if(isset($_POST['submit'])){
		$mail=$_POST['mail'];
		$password=md5($_POST['password']);

		if(!empty($mail) and !empty($password)){
			$sql=$dbb->prepare("SELECT * from membre where email=? and password=?");
			$sql->execute(array($mail,$password));

			$user=$sql->rowCount();

			if($user==1){

				$userinfo=$sql->fetch();
				$_SESSION['id']=$userinfo['idUser'];
				$_SESSION['prenom']=$userinfo['prenom'];
				$_SESSION['nom']=$userinfo['nom'];
				$_SESSION['mail']=$userinfo['email'];

				
				header("location: LandingPage.php?id=".$_SESSION['id']);
			
			} 
			else
				{echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
						  <strong>Ce compte n'existe pas!</strong> Vérifiez que votre adresse mail ou mot de passe est correct.
						  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						  	<span aria-hidden='true'>&times;</span>
						  </button>
						</div>";}
		}
		else
			echo"Veuillez remplir tous les champs";
	}

	?>

	<style>
		body{
			background-color: #f0f5f9;
		}

		h2
		{
			padding-bottom: 15px;
		}

		form
		{
			display: block;
			margin: 0 auto;
			width: 450px;
			margin-top: 25px;	
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