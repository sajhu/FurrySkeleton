<?php
/**
 * FurrySkeleton WebApp Framework
 * for quick developement of Bootstrap based PHP apps.
 *
 * Developed by:
 * 	Santiago Rojas - www.santiagorojas.co
 *
 * check for latest updates at https://github.com/sajhu/FurrySkeleton
 */

	/**
	 * Prints the page
	 * @param $title		string			the title to display in the page header
	 * @param $title		string/path		the path to include inside template's content
	 */
	function printPage($titleN = DEFAULT_TITLE, $includeN)
	{
		global $title;
		$title = $titleN;

		global $include;
		$include = $includeN;		
	
		include_once(STATIC_FOLDER. 'template.inc');
	}



	/**
	 * Prints an error message badge
	 * @param $errorMessage 	string		the error message to be displayed, can contain HTML inside
	 * @param $total 			boolean		wether to display the message in an entire page and die (true) or just the badge (false)
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
	}

?>