<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Home extends Main_controller
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
			'content' 		=> 'frontend/page/home_v',
			'breadcrumb' 	=> '-',
			'js_function_file'=> 'home-function',
			'active_menu'	=> 'home',
			'data'			=> array(
				'my_company'	=> $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
				'about' => $this->m_main->view_where('pages', array('page_code' => 'about'))->row(),
			)
		);
		$this->template->render_view('frontend/template_home_v', $data);
	}
}