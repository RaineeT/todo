<?php defined('SYSPATH') or die('No direct script access.');

class Model_Login extends Model_Database
{
	/**
	 * Validate Login Credentials
	 *
	 */
	public function login($username, $userpassword)
	{
		$query = DB::Query(Database::SELECT, "SELECT * FROM users WHERE username = :username AND password = :userpassword");
		$query->param(':username', $username)
				->param(':userpassword', $userpassword);
		$results = $query->execute();

		$count = 0;

		foreach($results as $element)
		{
			$count += 1;
		}

		if($count == 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>