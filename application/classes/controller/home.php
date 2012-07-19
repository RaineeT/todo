<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template_Twig
{
	public function before()
	{
		parent::before();
	}

	public function after()
	{
		$this->template->set('title', 'ToDo.com');
		$this->template->set('meta_keywords', 'To do listings');
		$this->template->set('meta_description', 'A list of things to do');
		$this->template->set('meta_copywrite', '&#169 ToDo.com, 2012');
		$this->template->set('header', '');
		$this->template->set('content', '');
		$this->template->set('footer', '');
		$this->template->set('styles', array());
		$this->template->set('scripts', array());

		parent::after();
	}

	public function action_index()
	{

	}

	public function action_addItem()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			// Load Model
			$insert = new Model_List();

			// Validate login against _db
			$status = $insert->item($_POST['title'], $_POST['description'], $_POST['due'], $_POST['url'], $_POST['image']);

			if($status)
			{
				echo 'TRUE';
				exit;
			}
			else
			{
				echo 'FALSE';
				exit;
			}
		}
	}
}