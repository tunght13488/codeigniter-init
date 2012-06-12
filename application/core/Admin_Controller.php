<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Admin Controller
 */
class Admin_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->config->item('application_maintainance_mode') === TRUE)
		{
			show_error("Site's under maintainance. Please come back later.");
		}
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/core/Admin_Controller.php */
