<?php
	function AfficherErreur($var) //Pour afficher l'erreur dans une alert
	{
		echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>" . print_r($var, true) . "
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
	}