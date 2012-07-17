<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template_Twig
{
	// public $template = 'testing/index';

	/**
	 * Initialize properties before running the controller methods (actions),
	 * so they are available to our action.
	 */
	public function before()
	{
		// Run anything that need ot run before this.
		parent::before();

		// Initialize empty/default values
		$this->template->set('title', 'ToDo.com');
		$this->template->set('meta_keywords', 'To do listings');
		$this->template->set('meta_description', 'A list of things to do');
		$this->template->set('meta_copywrite', '&#169 ToDo.com, 2012');
		$this->template->set('header', '');
		$this->template->set('content', '');
		$this->template->set('footer', '');
		$this->template->set('styles', array());
		$this->template->set('scripts', array());
	}
	/**
	 * Fill in default values for our properties before rendering the output.
	 */
	public function after()
	{		
		// Define CSS styles and JScript scripting
		$styles = array('assets/css/bootstrap.css' => 'screen');
		$scripts = array('assets/js/jquery.js');

		// Add above arrays to variables to be used by the template.
		$this->template->styles = array_reverse(array_merge($this->template->styles, $styles));
		$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));

		// Run anything that needs to run after this.
		parent::after();
	}

	public function action_index()
	{
		$message = array();
		$message['msg'] = '';
		$invalid = 'Invalid';

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if(isset($_POST['username']) && isset($_POST['userpassword']))
			{
				$status = $this->action_validateLogin((! empty($_POST['username']) ? mysql_real_escape_string(htmlentities($_POST['username'])) : ''),
														(! empty($_POST['userpassword']) ? mysql_real_escape_string(htmlentities($_POST['userpassword'])) : ''));

				if($status == $invalid)
				{
					$message['msg'] = 'Invalid login attempt, please try again';
				}
				else
				{
					$this->request->redirect('../index.php/home');
				}
			}
			else if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']))
			{
				$status = $this->action_validateRegister((! empty($_POST['name']) ? mysql_real_escape_string(htmlentities($_POST['name'])) : ''),
														(! empty($_POST['password']) ? mysql_real_escape_string(htmlentities($_POST['password'])) : ''),
														(! empty($_POST['email']) ? mysql_real_escape_string(htmlentities($_POST['email'])) : ''));

				if($status == $invalid)
				{
					$message['msg'] = 'Invalid registration attempt, please try again';
				}
				else
				{
					$this->request->redirect('../index.php/home');
				}
			}
		}
	}

	public function action_login()
	{
		// $this->request->body('Hey what up');
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$name = $_POST['username'];
			if($name == 'Rainee')
			{
				$this->template = new Twig_View('home/index');

				// $this->response->body( (string) $view);
				// $this->request->redirect('../index.php/home/index');
			}
		}
		// $this->template->header = View::factory('home/index', NULL);
	}

	public function action_register()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->request->redirect('../index.php/home');
		}
	}

	public function action_validateLogin($username, $password)
	{
		// Load Model
		$validate = new Model_Login();

		$md5_hast = md5($password);

		// Validate login against _db
		$status = $validate->login($username, $md5_hash);

		if($status != 'Invalid')
		{
			return TRUE;
		}
		else
		{
			return 'Invalid';
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
	}
}