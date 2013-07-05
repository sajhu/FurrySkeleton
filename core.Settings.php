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

	// Default page <title></title>
	define('DEFAULT_TITLE', 'FurrySkeleton');

// --------------------------------------------

	// * User Roles *
	// Add or change the names and levels of the roles as you which, this is an example
	define('ADMIN_ROLE', 10);
	define('MOD_ROLE', 5);
	define('USER_ROLE', 1);

	// Session Times in seconds
	define('SESSION_EXPIRE_TIME', 900);
	define('SESSION_REGENERATE_TIME', 300);


// --------------------------------------------

	// * Database connections *
	define('DB_NAME', 					'database_name'		);
	define('DB_USER', 					'database_user'		);
	define('DB_PASSWORD', 				'database_password'	);
	define('DB_HOST', 					'localhost'			); 


// --------------------------------------------

	// Global local folders
	define('DS', DIRECTORY_SEPARATOR);
	define('MAIN_FOLDER', __DIR__ . DS);

	define('MODEL_FOLDER', MAIN_FOLDER.		'model'		.DS);
	define('VIEW_FOLDER', MAIN_FOLDER.		'view'		.DS);
	define('LIB_FOLDER', MODEL_FOLDER.		'lib'		.DS);

	define('STATIC_FOLDER', MAIN_FOLDER.	'static'	.DS);

	define('JS_FOLDER', STATIC_FOLDER.		'js' 		.DS);
	define('CSS_FOLDER', STATIC_FOLDER.		'css' 		.DS);

	define('UPLOAD_FOLDER', MAIN_FOLDER.	'uploads' 	.DS);

	// --------------- 			^				^
	// In this section, local and remote atributes must refer to the same folder
	// --------------- 			v				v

	// Global remote folders


	define('BASE_URL', 						'/FurrySkeleton/'); // everything after example.com
	define('BASE_DOMAIN', 					'http://localhost'. BASE_URL); // Complete url to main folder


	define('JS_URL', BASE_URL. 				'static/js/'	);
	define('CSS_URL', BASE_URL. 			'static/css/'	);
	define('IMAGE_URL', BASE_URL. 			'static/img/'	);

	define('UPLOAD_URL', BASE_URL. 			'uploads/'		);

	define('ACTUAL_URL', $_SERVER['PHP_SELF']); // Don't edit this one


	// Special pages
	define('LOGIN_PAGE', 					'login.php');


// --------------------------------------------


	// Set PHP error reportings
	error_reporting(E_ALL ^ E_NOTICE); 		// For developer enviroments
	#error_reporting(0); 					// For production enviroments
?>