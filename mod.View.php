<?php

	/**
	 * Prints the page header
	 * head.php should have from <html> tag to content-starting <div>
	 * @param $title the title to display in the page header
	 * @param $section active section in the bootstrap menu
	 */
	function printHeader($title = DEFAULT_TITLE, $section = -1)
	{
		global $tit;
		$tit = $title;
		$activeSection = $section;
	
		include_once("head.php");
	}

	/**
	 * Prints the page footer
	 * footer.php should have from closing content </div> tag to </html>
	 */
	function printFooter()
	{
		include_once("footer.php");
		//TODO should also close mysql connections
	}


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