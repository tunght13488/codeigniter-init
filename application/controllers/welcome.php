<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Public_Controller {

	public function index()
	{
		$this->template->build('welcome_message');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
