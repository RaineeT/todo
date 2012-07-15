<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template_Twig
{
	/**
	 * Initialize properties before running the controller methods (actions),
	 * so they are available to our action.
	 */
	public function action_index()
	{
		$this->template->title = 'ToDo.com';
		$this->template->meta_keywords = 'To do listings';
		$this->template->meta_description = 'A list of things to do';
		$this->template->meta_copywrite = '&#169 ToDo.com, 2012';
		$this->template->header = '';
		$this->template->content = '';
		$this->template->footer = '';
		$this->template->styles = array();
		$this->template->scripts = array();
	}

	public function action_login()
	{
		if(isset($_POST['name']) && isset($_POST['password']) && ! empty($_POST['name']) && ! empty($_POST['password']))
		{
			$this->response->redirect('home/index');
		}
	}

	public function action_register()
	{
		if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) &&
		! empty($_POST['name']) && ! empty($_POST['password']) && ! empty($_POST['name']))
		{
			$this->response->redirect('home/index');
		}
	}
}