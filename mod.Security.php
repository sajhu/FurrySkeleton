<?

	/**
	* Checks for an existing Session or redirects to login page
	* Will also 
	* @requires NO previous html or content for it to initialize session and cookies
	*
	*/
	function handdleSession()
	{
		session_start();
		if(isset($_GET['logout']))
		{
			endSession();
		}
		//TODO re-verificar las credenciales
		else if(!isset($_SESSION['user']) || !isset($_SESSION['hash'])) // existe la sesión
		{
			header('Location: '.LOGIN_PAGE);
		}
		
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['CREATED'] > SESSION_REGENERATE_TIME)) {
			// session started more than 5 minutes ago
			session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
			$_SESSION['CREATED'] = time();  // update creation time
		}
		// Cierra la sesión si lleva más de 15 minutos
		if (isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > SESSION_EXPIRE_TIME)) {
	    // last request was more than 15 minutes ago
		    endSession();
		}

		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

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
	 *	Returns the session atribute in the parameter
	 * @param $name the session name to be returned
	 */
	function getSession($name)
	{
		return $_SESSION[$name];
	}


	/**
	 * Sanitizes any input string agaist SQLInjections and XSS
	 * @requires an existing MySQL connection is required for it to work. Will only scape HTML if there isn't one.
	 */
	function sanitize($string)
	{
		return @mysql_real_escape_string(htmlspecialchars(trim($string)));	
	}

?>