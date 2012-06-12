<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Public Controller
 */
class Public_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->config->item('application_maintainance_mode') === TRUE)
		{
			show_error("Site's under maintainance. Please come back later.");
		}
	}

}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */
