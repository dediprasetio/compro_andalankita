<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Contact_us extends Main_controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('main_model', 'm_main');
		$this->initialize_cookie();
		$this->load_global_data();
	}

	public function index()
	{
		$data = array(
			'content' 		=> 'frontend/page/contact_us_v',
			'breadcrumb' 	=> '<a href="" class="h5 text-white">Home</a>
								<i class="far fa-circle text-white px-2"></i>
								<a href="" class="h5 text-white">Contact Us</a>',
			'active_menu'	=> 'contact_us',
            'js_file'              => 'contact-us',
			'data' => array(
				'page_data' => $this->m_main->view_where('pages', array('page_code' => 'contactus'))->row(),
				'my_company'	=> $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
			)
		);
		$this->template->render_view('frontend/template_v', $data);
	}
}