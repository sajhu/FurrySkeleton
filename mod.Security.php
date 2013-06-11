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

		// If a logout parameter was passed by get, endSession
		if(isset($_GET['logout']))
		{
			endSession();
		}

		//TODO should re-verify hash
		else if(!isset($_SESSION['user']) || !isset($_SESSION['hash'])) // there is a session
		{
			header('Location: '.LOGIN_PAGE);
		}
		
		// Regenerates Session if it was created a lot ago
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['CREATED'] > SESSION_REGENERATE_TIME)) {
			session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
			$_SESSION['CREATED'] = time();  // update creation time
		}

		// End session if there was no activity
		if (isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > SESSION_EXPIRE_TIME)) {
		    endSession();
		}
		$_SESSION['LAST_ACTIVITY'] = time(); // always update last activity time stamp

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
	 * @requires an existing MySQL connection is required for it to work. Will put scape slashes if there isn't one.
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

?>