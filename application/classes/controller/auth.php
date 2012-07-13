<?php
defined('SYSPATH') or die('No direct script access.');
 
class Controller_Auth extends Controller_Template_Twig
{

  /**
   * Initialize properties before running the controller methods (actions),
   * so they are available to our action.
   */
  public function before()
  {
    // Run anything that need ot run before this.
    parent::before();

    if($this->auto_render)
    {
      // Initialize empty/default values
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
  }

	public function action_index()
	{
		
	}

  /**
   * Fill in default values for our properties before rendering the output.
   */
  public function after()
  {
    if($this->auto_render)
    {
      // Define CSS styles and JScript scripting
      $styles = array('assets/css/bootstrap.css' => 'screen');
      $scripts = array('assets/js/jquery.js');

      // Add above arrays to variables to be used by the template.
      $this->template->styles = array_reverse(array_merge($this->template->styles, $styles));
      $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
    }

    // Run anything that needs to run after this.
    parent::after();
  }
}