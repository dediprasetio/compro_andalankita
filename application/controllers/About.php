<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class About extends Main_controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('main_model', 'm_main');
		$this->initialize_cookie();
	}

	public function index()
	{
		$data = array(
			'content' 		=> 'page/about_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Hubungi Kami</span>',
			'active_menu'	=> 'about',
			'data' => array(
				'about' => $this->m_main->view_where('pages', array('page_code' => 'about'))->row(),
				'organization' => $this->m_main->view_where('pages', array('page_code' => 'organization'))->row(),
				'my_company'	=> $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
			)
		);
		$this->template->render_view('template_v', $data);
	}
}