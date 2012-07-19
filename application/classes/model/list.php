<?php defined('SYSPATH') or die('No direct script access.');

class Model_List extends Model_Database
{
	/**
	 * Insert new item into mongodb
	 *
	 */

	public function item($title, $description, $due, $url, $image)
	{
		// $obj = new Mongo("mongodb://${username}:${password}@localhost");
		$obj = new Mongo();		// connect
		$db = $obj->list;		// get the database named "list"


		$query = DB::Query(Database::INSERT, "INSERT INTO list (title, description, due, url, image) VALUES(:title, :description, :due, :url, :image)");
		$query->param(':title', $title)
				->param(':description', $description)
				->param(':due', $due)
				->param(':url', $url)
				->param(':image', $image);
		$result = $query->execute();

		return $result;
	}
}



	/*function MongoConnect($username, $password, $database, $host)
	{
		$con = new Mongo("mongodb://{$username}:{$password}@{$host}");		// Connect to Mongo Server
		$db = $con->selectDB($database);									// Connect to Database
	}*/
?>