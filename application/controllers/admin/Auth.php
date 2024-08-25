<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
        parent::__construct();
	}

	public function index()
	{
			$this->load->view('admin/pages/login_v');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}