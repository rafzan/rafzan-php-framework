<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_server extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
	}

	function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message_rest');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
