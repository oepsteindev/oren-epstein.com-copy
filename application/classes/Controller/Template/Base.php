<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Template_Base extends Controller_Template 
{
	// Define the template to use
	public $template = 'template';

	public function before()
	{
		parent::before();
 
		// Page Title
		$this->template->title = 'Oren\'s World!';
		
		$this->template->header = '';
		
		$this->auto_render = TRUE;
		
		// Relational Links (other than stylesheets)
		$this->template->links = array();
		
		// Stylesheets
		$this->template->stylesheets = array(
		'assets/css/font-awesome.min.css',
		'assets/css/simple-line-icons.css',
		'assets/css/bootstrap.min.css',
		'assets/css/animate.css',
		'style.css',
		'assets/css/oe.css',
		'assets/css/unslider.css',
		'assets/css/unslider-dots.css', 
			);
		
		// Javascripts
		$this->template->javascripts = array(
		'//code.jquery.com/jquery-2.1.4.min.js',
		'assets/js/jquery.easing.1.3.js',
		'assets/js/bootstrap.min.js',
		'assets/js/appear.min.js',
		'assets/js/jquery.scrollTo.min.js',
		'assets/js/jquery.localScroll.min.js',
		'assets/js/jquery.viewport.mini.js',
		'assets/js/oe.js',
		'assets/js/unslider-min.js',
		'assets/js/ckeditor/ckeditor.js',
		'assets/js/mail.js',
		'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js'
		);
	
		$email = "finespun1@gmail.com";
		$default = ""; // absolute url to default image goes here or leave empty for default gravatar image
		$size = 200;
		$grav_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=" . urlencode($default) . "&s=" . $size;
		$img = '<img src="'.$grav_url.' width="40px" height="40px" class="gravatar" >';
	
	
		// Javascript Custom
		$this->template->js_custom = '';
		$this->template->js_tags = '';
		
		$this->template->gravatar = $img;
		
		//branding
		$this->template->branding='<img src="http://www.finespunmusic.com/oren-epstein/assets/oe_img/NameLogo50h.png">';

		// Default layout
		$this->template->layout = View::factory('oe/index');
		
		// No content by default
		$this->template->layout->content = '';

		// Layout Shortcut
		$this->layout = $this->template->layout;
		
		$this->view = $this->template->layout;
		
		
	}
 
} // End Controller_Template_Base