<?php
	function AfficherErreur($var) //Pour afficher l'erreur dans une alert
	{
		echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>" . print_r($var, true) . "
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
	}


	function dateDiff($date1, $date2)//calculer la différence entre deux dates
	{
		$diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
		$retour = array();

		$tmp = $diff;
		$retour['second'] = $tmp % 60;

		$tmp = floor( ($tmp - $retour['second']) /60 );
		$retour['minute'] = $tmp % 60;

		$tmp = floor( ($tmp - $retour['minute'])/60 );
		$retour['hour'] = $tmp % 24;

		$tmp = floor( ($tmp - $retour['hour'])  /24 );
		$retour['day'] = $tmp;

		return $retour;
	}