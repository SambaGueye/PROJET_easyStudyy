<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/styleLanding.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<?php require("header.php") ?>

	<div class="container">
		<div class="row" >
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="jumbotron" style="border-left: 2px solid red" >
					<h1 class="display-4">Hello, Bienvenu dans votre espace d'échange</h1>
					<p class="lead">Le but de ce site est de vous simplifier votre vie d'étudiant en vous proposants diverses rubriques</p>

					<hr class="my-4">

					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Poster une annonce
					</button>

					<!-- Modal --> 
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable">
							<div class="modal-content">
							    <div class="modal-header">
							      <h5 class="modal-title" id="exampleModalLabel">Nouveau topic</h5>
							      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							        <span aria-hidden="true">&times;</span>
							      </button>
							    </div>

							    <div class="modal-body">          
								    <form  autocomplete="off" method="post">
								        <div class="form-group">
								          <label>Titre de l'annonce</label>
								          <input type="text" class="form-control" id="inputAnnonce" name="titreA" placeholder="Titre" required />
								        </div>
								        
								        <div class="form-group">
								          <label>Description de l'annonce</label>
								          <textarea class="form-control" id="inputTextarea1" rows="3" placeholder="Entrer une description" required/></textarea>
								        </div>
								        
								        <div class="form-group" style="width:300px;">
								          <label>Catégories</label>
								          <input type="text" class="form-control" id="myInput" name = "inputCategorie" placeholder="Catégorie">
								        </div>
								    </form>
							    </div>

							    <div class="modal-footer">
							      <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
							      <button type="submit" class="btn btn-primary">Créer le topic</button>
							    </div>
							</div>
						</div>
					</div>

	  				<hr class="my-4">

					<p>Notre objectif, c'est vous aider à mieux gérer votre temps</p>
					<a class="btn btn-primary btn-lg" href="aPropos.php" role="button">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
		    <li class="breadcrumb-item"><a href="#">L3</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Cours</li>
		  </ol>
		</nav>
	</div>

	<div class="container">
		<h3> Catégories </h3>
		<div class="row justify-content-center">
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Discussion générale</h5>
			    <h6 class="card-subtitle mb-2 text-muted">3 vues 1 post</h6>
			    <p class="card-text">Discussion générale</p>
			    <a href="#" class="card-link">Entrer</a>
			    <a href="#" class="card-link">S'abonner</a>
			  </div>
			</div>

			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Études</h5>
			    <h6 class="card-subtitle mb-2 text-muted">3 vues 1 post</h6>
			    <p class="card-text">Un problème spécifique lié à tes cours ? Clique sur ton niveau d'études</p>
			    <a href="#" class="card-link">L1</a>
			    <a href="#" class="card-link">L2</a>
			    <a href="#" class="card-link">L3</a>
			    <a href="#" class="card-link">M1</a>
			    <a href="#" class="card-link">M2</a>
			    <a href="#" class="card-link">S'abonner</a>
			  </div>
			</div>

			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="card-link">Entrer</a>
			    <a href="#" class="card-link">S'abonner</a>
			  </div>
			</div>
		</div>

		<p>
		  <a class="justify-content-right" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		    Voir plus
		  </a>
		</p>
		<div class="collapse" id="collapseExample">
			<div class="container">
				<div class="row justify-content-center">
					    <div class="card" style="width: 10rem;">
							<div class="card-body">
							    <h5 class="card-title">Card title</h5>
							    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							    <a href="#" class="card-link">Card link</a>
							    <a href="#" class="card-link">Another link</a>
							</div>
						</div>

						<div class="card" style="width: 10rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>

						<div class="card" style="width: 10rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>

						<div class="card" style="width: 10rem;">
							<div class="card-body">
							    <h5 class="card-title">Card title</h5>
							    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							    <a href="#" class="card-link">Card link</a>
							    <a href="#" class="card-link">Another link</a>
							</div>
						</div>

						<div class="card" style="width: 10rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>

						<div class="card" style="width: 10rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <a href="#" class="card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>
				</div>
			</div>
		</div>
	</div>

	<br>

	<div class="container">
		<h3> Derniers posts </h3>
		<br>

		<div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">Utilisation Moodle</h5>
		      <small>3 days ago</small>
		    </div>
		    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		    <small>Utilisateur</small>
		  </a>
		  <a href="#" class="list-group-item list-group-item-action">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">List group item heading</h5>
		      <small class="text-muted">3 days ago</small>
		    </div>
		    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		    <small class="text-muted">Donec id elit non mi porta.</small>
		  </a>
		  <a href="#" class="list-group-item list-group-item-action">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">List group item heading</h5>
		      <small class="text-muted">3 days ago</small>
		    </div>
		    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		    <small class="text-muted">Donec id elit non mi porta.</small>
		  </a>
		</div>
	</div>

	<br>

	<div class="container">
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled">
			  		<a class="page-link" href="#" tabindex="-1" aria-disabled="true">	Previous</a>
				</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
			    	<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
	</div>



	<!-- Script autocompletion -->
	<script>
		function autocomplete(inp, arr) {
		    /*the autocomplete function takes two arguments,
		    the text field element and an array of possible autocompleted values:*/
		    var currentFocus;
		    /*execute a function when someone writes in the text field:*/
		    inp.addEventListener("input", function(e) {
		        var a, b, i, val = this.value;
		        /*close any already open lists of autocompleted values*/
		        closeAllLists();
		        if (!val) { return false;}
		        currentFocus = -1;
		        /*create a DIV element that will contain the items (values):*/
		        a = document.createElement("DIV");
		        a.setAttribute("id", this.id + "autocomplete-list");
		        a.setAttribute("class", "autocomplete-items");
		        /*append the DIV element as a child of the autocomplete container:*/
		        this.parentNode.appendChild(a);
		        /*for each item in the array...*/
		        for (i = 0; i < arr.length; i++) {
		          /*check if the item starts with the same letters as the text field value:*/
		          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
		            /*create a DIV element for each matching element:*/
		            b = document.createElement("DIV");
		            /*make the matching letters bold:*/
		            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
		            b.innerHTML += arr[i].substr(val.length);
		            /*insert a input field that will hold the current array item's value:*/
		            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
		            /*execute a function when someone clicks on the item value (DIV element):*/
		            b.addEventListener("click", function(e) {
		                /*insert the value for the autocomplete text field:*/
		                inp.value = this.getElementsByTagName("input")[0].value;
		                /*close the list of autocompleted values,
		                (or any other open lists of autocompleted values:*/
		                closeAllLists();
		            });
		            a.appendChild(b);
		          }
		        }
		    });
		    /*execute a function presses a key on the keyboard:*/
		    inp.addEventListener("keydown", function(e) {
		        var x = document.getElementById(this.id + "autocomplete-list");
		        if (x) x = x.getElementsByTagName("div");
		        if (e.keyCode == 40) {
		          /*If the arrow DOWN key is pressed,
		          increase the currentFocus variable:*/
		          currentFocus++;
		          /*and and make the current item more visible:*/
		          addActive(x);
		        } else if (e.keyCode == 38) { //up
		          /*If the arrow UP key is pressed,
		          decrease the currentFocus variable:*/
		          currentFocus--;
		          /*and and make the current item more visible:*/
		          addActive(x);
		        } else if (e.keyCode == 13) {
		          /*If the ENTER key is pressed, prevent the form from being submitted,*/
		          e.preventDefault();
		          if (currentFocus > -1) {
		            /*and simulate a click on the "active" item:*/
		            if (x) x[currentFocus].click();
		          }
		        }
		    });
		    function addActive(x) {
		      /*a function to classify an item as "active":*/
		      if (!x) return false;
		      /*start by removing the "active" class on all items:*/
		      removeActive(x);
		      if (currentFocus >= x.length) currentFocus = 0;
		      if (currentFocus < 0) currentFocus = (x.length - 1);
		      /*add class "autocomplete-active":*/
		      x[currentFocus].classList.add("autocomplete-active");
		    }
		    function removeActive(x) {
		      /*a function to remove the "active" class from all autocomplete items:*/
		      for (var i = 0; i < x.length; i++) {
		        x[i].classList.remove("autocomplete-active");
		      }
		    }
		    function closeAllLists(elmnt) {
		      /*close all autocomplete lists in the document,
		      except the one passed as an argument:*/
		      var x = document.getElementsByClassName("autocomplete-items");
		      for (var i = 0; i < x.length; i++) {
		        if (elmnt != x[i] && elmnt != inp) {
		          x[i].parentNode.removeChild(x[i]);
		        }
		      }
		    }
		    /*execute a function when someone clicks in the document:*/
		    document.addEventListener("click", function (e) {
		        closeAllLists(e.target);
		    });
		}

		/*An array containing all the country names in the world:*/
		var categories = ["L1", "L2", "L3", "M1", "M2"];

		/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
		autocomplete(document.getElementById("myInput"), categories);
	</script>


</body>
</html>