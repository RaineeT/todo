<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Auth {

	public function action_index()
	{
		$this->response->body('hello, login!');
	}

	public function action_signin()
	{
		
	}

}