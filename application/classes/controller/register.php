<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Auth {

	public function action_index()
	{
		$this->response->body('hello, register!');
	}

	public function action_signup()
	{

	}

}
