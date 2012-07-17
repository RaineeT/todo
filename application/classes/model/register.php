<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register extends Model_Database
{
	/**
	 * Register New Members
	 *
	 */
	public function checkname($name)
	{
		$sql = "SELECT *
				FROM users
				WHERE username = '$name'";

		$result = DB::Query(Database::SELECT, $sql)->execute();
		$count = 0;

		foreach($result as $element)
		{
			$count += 1;
		}

		if($count == 0)
		{
			return TRUE;
		}
		else
		{
			return 'Invalid';
		}
	}

	public function checkemail($email, $strict = FALSE)
	{
		$regex = $strict ? '/^([.0-9a-z_-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i' : '/^([*+!.&#$|\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i';
		if(preg_match($regex, trim($email), $matches))
		{
			return FALSE;		// Valid email address
		}
		else
		{
			return TRUE;		// Invalid email address
		}
	}

	public function register($name, $password, $email)
	{
		$sql = "INSERT INTO users (name, password, email)
				VALUES('$name', '$password', '$email')";

		$result = DB::Query(Database::INSERT, $sql)->execute();

		return $result;
	}
}
?>