<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template_Twig
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

		$this->response->body('made it home');
	}

	public function action_add()
	{
		
	}
}