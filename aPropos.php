<?php
session_start(); 
$idd=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/styleLanding.css">
	<link rel="stylesheet" type="text/css" href="style/teamDev.css">
	
</head>
<body>

	<?php require("header.php") ?>

	<!--<div class="container">
		<div class="row" >
			<div class="jumbotron" style="border-left: 2px solid blue" >
			  <h1 class="display-4">Hello, Bienvenu dans votre espace d'échange</h1>
			  <p class="lead">Le but de ce site est de vous simplifier votre vie d'étudiant en vous proposants diverses rubriques</p>
			  <hr class="my-4">
			  <p>Les fonctionnalités qu'il offre sont:</p>
			  	<div class="row">
			  		<div class="col-sm">
			  			<div class="card" style="width: 18rem; border-left: 2px solid red;">
						  <div class="card-body">
						    <h5 class="card-title">Emplois du temps</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Vous avez la possibilité de consulter votre emploi du temps facilement en quqlques clics</p>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div><br>
			  		</div>
			  		<div class="col-sm">
			  			<div class="card" style="width: 18rem; border-left: 2px solid red;">
						  <div class="card-body">
						    <h5 class="card-title">Todo-List</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Vous pouvez plannifier votre révision, une liste de taches à faire (dans la journée, la semaine...)</p>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div><br>
			  		</div>
			  		<div class="col-sm">
			  			<div class="card" style="width: 18rem; border-left: 2px solid red;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div><br>
			  		</div>
			  		<div class="col-sm">
			  			<div class="card" style="width: 18rem; border-left: 2px solid red;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div><br>
			  		</div>
			  		<div class="col-sm">
			  			<div class="card" style="width: 18rem; border-left: 2px solid red;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div><br>
			  		</div>
			  		<div class="col-sm">
			  			<div class="card" style="width: 18rem; border-left: 2px solid red;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div><br>
			  		</div>
			  	</div>
			  
			</div>
		</div>
	</div>-->

<!--Equipe développeur -->
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/samba.jpeg" alt="card image"></p>
                                    <h4 class="card-title">Samba GUEYE</h4>
                                    <p class="card-text">Full Stack Developer</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Samba GUEYE</h4>
                                    <p class="card-text">Étudiant en Licence 2 MIASHS parcours MIAGE. J'occupe le poste de développeur Full-Stack dans ce projet.</p>
                                    <p>E-mail: sambahathagueyee@gmail.com</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/sophia.jpeg" alt="card image"></p>
                                    <h4 class="card-title">Sophia NACHIN</h4>
                                    <p class="card-text">Full-Stack Developer</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sophia NACHIN</h4>
                                    <p class="card-text">Étudiante en Licence 2 MIASHS parcours MIAGE. J'occupe le poste de développeur Full-Stack dans ce projet.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/filiz.jpg" alt="card image"></p>
                                    <h4 class="card-title">Filiz KARA</h4>
                                    <p class="card-text">Full-Stack Developer</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Filiz KARA</h4>
                                    <p class="card-text">Étudiante en Licence 3 MIAGE et titulaire d'un DUT Informatique. J'occupe le poste de développeur Full-Stack dans ce projet.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
        </div>
    </div>
</section>
<!-- Team -->

<!-- Fin équipe dev -->

	<div class="container">
	  <div class="row">
	    <div class="col-sm">
	      <h3>A propos de nous</h3>
	      <p>Samba GUEYE, étudiant en MIAGE à l'université de Toulouse</p>
          <p>Sophia NACHIN, étudiante en MIAGE à l'université de Toulouse</p>
          <p>Filiz KARA, étudiante en MIAGE à l'université de Toulouse</p>
	    </div>
	    <div class="col-sm">
	      <h3>Contacts</h3>
	      <p>Téléphone: +33 753 00 85 92</p>
	      <p>Mail: sambahathagueyee@gmail.com</p>
	      <p>Vous pouvez aussi nous suivre sur les réseaux sociaux</p>

	    </div>
	    <div class="col-sm">
	      <h3>Poser une question</h3>
	      <div class="col-sm">
	      	<form>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Adresse mail</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" >
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Message</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Envoyer</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>