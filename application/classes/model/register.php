<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register extends Model_Database
{
	/**
	 * Register New Members
	 *
	 */
	public function checkname($name)
	{
		$query = DB::Query(Database::SELECT, "SELECT * FROM users WHERE username = :name");
		$query->param(':name', $name);
		$results = $query->execute();

		$count = 0;

		foreach($results as $element)
		{
			$count += 1;
		}

		if($count == 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function checkemail($email, $strict = FALSE)
	{
		$regex = $strict ? '/^([.0-9a-z_-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i' : '/^([*+!.&#$|\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i';
		if(preg_match($regex, trim($email), $matches))
		{
			return TRUE;		// Valid email address
		}
		else
		{
			return FALSE;		// Invalid email address
		}
	}

	public function register($name, $password, $email)
	{
		$query = DB::Query(Database::INSERT, "INSERT INTO users (username, password, email) VALUES(:username, :password, :email)");
		$query->param(':username', $name)
				->param(':password', $password)
				->param(':email', $email);
		$result = $query->execute();

		return $result;
	}
}
?>