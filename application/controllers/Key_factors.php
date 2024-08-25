<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Key_factors extends Main_controller
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
			'content' 		=> 'frontend/page/key_factors_v',
			'breadcrumb' 	=> '<a href="" class="h5 text-white">Home</a>
								<i class="far fa-circle text-white px-2"></i>
								<a href="" class="h5 text-white">Tentang Kami</a>
								<i class="far fa-circle text-white px-2"></i>
								<a href="" class="h5 text-white">Key Factors</a>',
			'active_menu'	=> 'key_factors',
			'data' => array(
				'page_data' => $this->m_main->view_where('pages', array('page_code' => 'keyfactors'))->row(),
				'my_company'	=> $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
			)
		);
		$this->template->render_view('frontend/template_v', $data);
	}
}