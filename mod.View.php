<?php

	/**
	 * Prints an error message badge
	 * @param $errorMessage String - the error message to be displayed, can contain HTML inside
	 * @param $total boolean - wether to display the message in an entire page and die (true) or just the badge (false)
	 */
	function printError($errorMessage, $total = FALSE)
	{
		if(!$total)
			echo '
			<div class="alert alert-block alert-error">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <h4>¡Error!</h4>
			  <p>'.$errorMessage.'</p>
			</div>
			<a href="#" class="btn btn-large text-center" onclick="history.back();">Volver</a>

			';
		else
		{
			printHeader('Permiso Denegado | Doctor Clinic');
			echo '
			<div class="alert alert-block alert-error">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <h4>¡Error!</h4>
			  <p>'.$errorMessage.'</p>
			</div>
			<a href="#" class="btn btn-large text-center" onclick="history.back();">Volver</a>

			';			
			printFooter();
			exit;
		}
	}
?>