<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Contact_us extends Main_controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('main_model', 'mainmodel');
		$this->initialize_cookie();
	}

	public function index()
	{
		$data = array(
			'content' 		=> 'page/contact_us_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Hubungi Kami</span>',
			'active_menu'	=> 'contact_us',
			'page'    		=> $this->mainmodel->view('my_company')->row(),
			'data'			=> array(
				'my_company'	=> $this->mainmodel->view_where('my_company', array('company_id' => 1))->row(),
				)
		);
		$this->template->render_view('template_v', $data);
	}
}