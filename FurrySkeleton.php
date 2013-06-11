<?php
/**
 * FurrySkeleton WebApp Framework
 * for quick developement of Bootstrap based PHP apps.
 *
 * Developed by:
 * 	Santiago Rojas - www.santiagorojas.co
 *
 * Version 1.1a 
 * check for latest updates at https://github.com/sajhu/FurrySkeleton
 */


// --------------------------------------------
// --- Includes
// --------------------------------------------

include_once('config.php');
include_once(PHP_FOLDER.'/functions.php');
include_once(MAIN_FOLDER.'/mod.Security.php');
include_once(MAIN_FOLDER.'/mod.View.php');


// --------------------------------------------
// --- Constructor
// --------------------------------------------

	// Checking for a correct session
	handdleSession();


// --------------------------------------------
// --- Session Globals - **** PLEASE EDIT HERE ***
// --------------------------------------------


	// --- Setting up the user role (please acomodate this to your database-specific names)
		define("USER_ID", getSession('id'));
		#$userVars = $DB->Select('USERS', array('id' => USER_ID));
				
		define('USER_ROLE', SECOND_ROLE);  #Needs to be set to the actual user's role, for example: $userVars['role']
		#define('USER_COMPLETE_NAME', $userVars['name'] .' '. $userVars['last_name']);


// --------------------------------------------
// --- Main Methods
// --------------------------------------------

	/**
	* Defines user role privileges needed to excecute the actual page or method dentro de un método los privilegios necesarios para ejecutarlo 
	* @param $role int - needed role as defined in config file
	* @param $only boolean - TRUE means only that role is allowed, FALSE for that and higher roles
	*/
	function definePrivileges($role, $only = FALSE)
	{
		if(($only && USER_ROLE != $role) || (!$only &&  USER_ROLE < $role))
			printError('You don\'t have the required permissions to perform this.',true);
	}
?>