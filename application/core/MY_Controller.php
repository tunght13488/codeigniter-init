<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base Controller
 */
class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->_set_layout();
	}

	private function _set_layout()
	{
		$this->template->set_layout('default')
			->title(lang('application_title'));
	}

}

require_once('Public_Controller.php');
require_once('Admin_Controller.php');

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
