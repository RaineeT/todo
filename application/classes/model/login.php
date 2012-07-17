<?php defined('SYSPATH') or die('No direct script access.');

class Model_Login extends Model_Database
{
	/**
	 * Validate Login Credentials
	 *
	 */
	public function login($username, $userpassword)
	{
		$sql = "SELECT *
				FROM users
				WHERE username = '$username' AND password = '$userpassword'";

		$result = DB::Query(Database::SELECT, $sql)->execute();
		$count = 0;

		foreach($result as $element)
		{
			$count += 1;
		}

		if($count == 0)
		{
			return 'Invalid';
		}
		else
		{
			return TRUE;
		}
	}
}

?>