<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EasyStudy</title>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <!--- Image Slider -->
    <!--<div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ul>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/graduation.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-2">EasyStudy</h1>
                        <h3>Un espace dédié aux étudiants</h3>
                        <button type="button" class="btn btn-outline-light btn-lg">En savoir plus</button>
                        <button type="button" class="btn btn-primary btn-lg">Commencer</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/imgOrdi.jpg">
                </div>
                <div class="carousel-item">
                    <img src="images/online.jpg">
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
    </div>   --> 

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
    
    <!--- Jumbotron -->
	<div class="container-fluid">       
        <div class="jumbotron" style="border-left: 2px solid red" >
            <h1 class="display-4">Hello, Bienvenu dans votre espace d'échange</h1>
            <p class="lead">Le but de ce site est de vous simplifier votre vie d'étudiant en vous proposants diverses rubriques</p>

            <hr class="my-4">

            <p>Notre objectif, c'est vous aider à mieux gérer votre temps</p>
            <a class="btn btn-primary btn-lg" href="aPropos.php" role="button">En savoir plus</a>
        </div>      
	</div>

    <!--- Fixed background -->
	<figure>
		<div class="fixed-wrap">
			<div id="fixed">
			</div>
		</div>
	</figure>

    <!--- Meet the team -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Meet the Team</h1>
			</div>
		</div>
	</div>


	<!--- Cards -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="cards">
					<img class="card-img-top" src="img/team1.png">
					<div class="card-body">
						<h4 class="card-title">John Doe</h4>
						<p class="card-text">John is an Internet entrepreneur with almost 20 years of experience</p>
					</div>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="cards">
					<img class="card-img-top" src="img/team5.png">
					<div class="card-body">
						<h4 class="card-title">Sophia Nachin</h4>
						<p class="card-text">Sophia is a beautiful student with almost 4 years of experience as a New Super Mario Bros player</p>
					</div>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="cards">
					<img class="card-img-top" src="img/team3.png">
					<div class="card-body">
						<h4 class="card-title">Phil Ho</h4>
						<p class="card-text">Phil is a developer with over 5 years od web development experience</p>
					</div>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>						
		</div>
    </div>
    
    <!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#facebook"> <i class="fab fa-facebook"></i></a>
				<a href="#twitter"> <i class="fab fa-twitter"></i></a>
				<a href="#instagram"> <i class="fab fa-instagram"></i></a>
				<a href="#google"> <i class="fab fa-google-plus-g"></i></a>
				<a href="#youtube"> <i class="fab fa-youtube"></i></a>
			</div>
		</div>
    </div>
    
    <!--- Footer -->
    <?php require("footer.php"); ?>
</body>