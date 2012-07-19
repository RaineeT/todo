<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template_Twig
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

	public function action_login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			// Load Model
			$validate = new Model_Login();

			// Validate login against _db
			$status = $validate->login($_POST['username'], md5($_POST['userpassword']));


			/*$username = mysql_real_escape_string(htmlentities($_POST['username']));
			$userpassword = md5(mysql_real_escape_string(htmlentities($_POST['userpassword'])));

			$status = $this->validateLogin($username, $userpassword);*/

			if($status)
			{
				// $this->template = new Twig_View('home/index');
				// $view = View::factory('home/index');
				// $this->response->body( (string) $view);
				
				// $this->request->redirect('home/');
				echo 'TRUE';
				exit;
			}
			else
			{
				echo 'FALSE';
				exit;
			}
		}
		// $this->template->header = View::factory('home/index', NULL);
	}

	public function action_register()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			// $this->request->redirect('home/');
			$validate = new Model_Register();

			$name = $_POST['name'];
			$email = $_POST['email'];
			$md5_hash = md5($_POST['password']);

			$goodName = $validate->checkname($name);
			if($goodName)
			{
				$goodEmail = $validate->checkemail($email);
				if($goodEmail)
				{
					$registered = $validate->register($name, $md5_hash, $email);
					if($registered)
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
				else
				{
					echo 'FALSE';
					exit;
				}
			}
			else
			{
				echo 'FALSE';
				exit;
			}
		}
	}

	/*public function validateLogin($username, $userpassword)
	{
		// Load Model
		$validate = new Model_Login();

		// Validate login against _db
		$status = $validate->login($username, $userpassword);

		if($status == TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function action_validateRegister($name, $password, $email)
	{
		// Load Model
		$validate = new Model_Register();

		$status = $validate->checkname($name);

		//	nest the following ?

		$status = $validate->checkemail($email);

		$md5_hash = md5($password);
		$status = $validate->register($name, $md5_hash, $email);

		if($status != 'Invalid')
		{
			return TRUE;
		}
		else
		{
			return 'Invalid';
		}
	}*/
}