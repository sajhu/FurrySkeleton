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
// --- Configurations File
// --------------------------------------------
 
	// ---------------------------------------------------------------------------------
	// Change this seetings as desired, as long as you know what they mean
	// IMPORTANT: parts marked * like this * MUST be set.
	// ---------------------------------------------------------------------------------
// --------------------------------------------

	// Default page <title>
	define("DEFAULT_TITLE", "FurrySkeleton");


// --------------------------------------------

	// Global atributes
	define("MAIN_FOLDER", __DIR__);
	define("PHP_FOLDER", MAIN_FOLDER.'/assets/php');
	define("JS_FOLDER", MAIN_FOLDER.'/assets/js');
	define("CSS_FOLDER", MAIN_FOLDER.'/assets/css');
	define("UPLOAD_FOLDER", MAIN_FOLDER.'/uploads');


// --------------------------------------------

	// * User Roles *
	// Add or change the names and levels of the roles as you which, this is an example
	define('ADMIN_ROLE', 10);
	define('MOD_ROLE', 5);
	define('USER_ROLE', 1);

	// Session Times in seconds
	define('SESSION_REGENERATE_TIME', 300);
	define('SESSION_EXPIRE_TIME', 900);
	define('LOGIN_PAGE', 'login.php');


// --------------------------------------------

	// * Database connections *
	define("DB_NAME","database_name");
	define("DB_USER","database_user");
	define("DB_PASSWORD","database_password");
	define("DB_HOST","localhost"); 


// --------------------------------------------

	// Set PHP error reportings
	error_reporting(E_ALL ^ E_NOTICE);
?>