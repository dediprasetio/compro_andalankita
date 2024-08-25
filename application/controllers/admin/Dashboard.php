<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Dashboard extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
        $this->load->model('User_model', 'm_user');
        $this->load->model('property_model', 'm_property');
		$this->check_login();
	}

	public function index()
	{
        $admin = $this->m_user->admin()->result_array();
        $events = $this->mainmodel->view_where_ordering_limit('events', array('status_id' => 2), 'event_id', 'desc', 0, 10  )->result_array();
        $total_event = $this->mainmodel->view_where_custom_select('events', array('count(event_id) as total_event'), array('status_id' => 2))->row();
        $data = array(
            'content' 		=> 'admin/pages/admin_home_v',
            'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>',
            'menu'			=> 'home',
            'data'          => array(
                'admin' => $admin,
                'events'    => $events,
                'total_event' => $total_event
            )
        );
        $this->template->render_view('admin/template_admin_v', $data);
	}
}
?>