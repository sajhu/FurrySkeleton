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
	* Checks for an existing Session or redirects to login page
	* Will also manage session max inactivity time and id regeneration
	* @requires NO previous html or content for it to initialize session and cookies
	*
	*/
	function handdleSession()
	{
		session_start();

		// If a logout parameter was passed by GET, endSession
		if(isset($_GET['logout']))
		{
			endSession();
		}

		//TODO should re-verify hash against database
		else if(!isset($_SESSION['user']) || !isset($_SESSION['hash'])) // there is a session
		{
			header('Location: '.LOGIN_PAGE);
		}
		
		// Regenerates Session if it was created a lot ago
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['CREATED'] > SESSION_REGENERATE_TIME)) {
			session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
			$_SESSION['CREATED'] = time();  
		}

		// End session if there was no activity
		if (isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > SESSION_EXPIRE_TIME)) {
		    endSession();
		}
		$_SESSION['LAST_ACTIVITY'] = time(); // *always* update last activity time stamp

	}

	// Deletes all Sessions
	function endSession()
	{
		session_start();
		unset($_SESSION['id']);
		unset($_SESSION['user']);
		unset($_SESSION['hash']);
		unset($_SESSION['LAST_ACTIVITY']);
		unset($_SESSION['CREATED']);
		session_destroy();
		header('Location: '.LOGIN_PAGE);
	}


	/**
	 * Sanitizes any input string agaist SQLInjections and XSS
	 * @requires 	An existing MySQL connection is required for it to work. Will put scape slashes if there isn't one.
	 */
	function sanitize($string)
	{
		//TODO should check first for Magic Quotes GPC
		try {
			return mysql_real_escape_string(htmlspecialchars(trim($string)));	
		} catch (Exception $e) {
			return addslashes(htmlspecialchars(trim($string)));
		}
	}

	/**
	 *	Returns the session atribute in the parameter
	 * @param $name 	string		the session name to be returned
	 */
	function getSession($name)
	{
		return $_SESSION[$name];
	}

	/**
	 *	Returns the session atribute in the parameter
	 * @param $name 	string		the session name to be created
	 * @param $value 	string		the session value to be assigned
	 * @param $sanitize boolean 	To decide if the $value given should be sanitized, true by default
	 */	
	function setSession($name, $value = '', $sanitize = TRUE)
	{
		if ($sanitize)
			$_SESSION[$name] = sanitize($value);
		else
			$_SESSION[$name] = $value;
	}

	/**
	 *	Returns the $_GET atribute in the parameter sanitized
	 * @param $name		string 		the variable's name to be returned
	 */
	function get($name)
	{
		return sanitize($_GET[$name]);
	}

	/**
	 *	Returns the $_POST atribute in the parameter sanitized
	 * @param $name		string 		the variable's name to be returned
	 */
	function post($name)
	{
		return sanitize($_POST[$name]);
	}

?>