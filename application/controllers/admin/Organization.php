<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Organization extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{
        $data = array(
			'page_title'	=> 'Struktur Organisasi',
			'content' 		=> 'admin/pages/pages_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">Visi dan Misi</span>',
			'js_file'		=> 'pages',
			'data'			=> array(
				'status_list'	=> $this->mainmodel->view('mst_status')->result_array(),
                'page'    		=> $this->mainmodel->view_where('pages', array('page_code' => $this->uri->segment(2)))->row(),
                'events'    => $this->mainmodel->view_where_ordering_limit('events', array('status_id' => 2), 'event_id', 'desc', 0, 10  )->result_array(),
                'total_event' => $this->mainmodel->view_where_custom_select('events', array('count(event_id) as total_event'), array('status_id' => 2))->row()
			)
		);
        $this->template->render_view('admin/template_admin_v', $data);
	}
}
?>