<?php 
	session_start();


	if(isset($_GET['id']) and $_GET['id']>0){
		if(isset($_SESSION['id']) and $_GET['id'] == $_SESSION['id']){
?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="./style/LandingPage.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<?php require("header.php") ?>
<div>	
	<div class="headLanding" >
		<div class="container">
			<div class="row" >
				<div class="col-sm-12 col-lg-6" id="firstPart">
					<h1 class="display-4">Hello, Bienvenu dans votre espace d'échange</h1>
					<p class="lead">Le but de ce site est de vous simplifier votre vie d'étudiant en vous proposants diverses rubriques</p>
					<p>Notre objectif, c'est vous aider à mieux gérer votre temps</p>
				</div>
				<div class="col-sm-12 col-lg-6">
					<p>kbnsk</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container" >
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/image.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="images/ln.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="images/bu.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>

	<?php require("footer.php"); ?>

</body>
</html>
<?php }} ?>