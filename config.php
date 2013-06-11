<?php


// --------------------------------------------

	// Default page <title>
	define("TITULO", "Activar SAS");

// --------------------------------------------


	// Global atributes
	define("MAIN_FOLDER", __DIR__);
	define("PHP_FOLDER", MAIN_FOLDER.'/assets/php');
	define("JS_FOLDER", MAIN_FOLDER.'/assets/js');
	define("CSS_FOLDER", MAIN_FOLDER.'/assets/css');
	define("UPLOAD_FOLDER", MAIN_FOLDER.'/uploads');

// --------------------------------------------

	// Database connections
	define("DB_NAME","actweb");
	define("DB_USER","actweb");
	define("DB_PASSWORD","DLSolution");
	define("DB_HOST","localhost"); // To connect remotely use box836.bluehost.com. Should actually be used in the production server durning develop time

// --------------------------------------------

	// Set PHP error reportings
	error_reporting(E_ALL ^ E_NOTICE);
?>