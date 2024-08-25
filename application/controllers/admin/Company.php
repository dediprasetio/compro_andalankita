<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Company extends Admin_main_controller
{
    function __construct()
	{
		parent::__construct();
		$this->check_login();
        $this->load->model('main_model', 'mainmodel');
	}

    public function index()
    {
        $data = array(
            'content'           => 'admin/pages/company_v',
            'breadcrumb'        => '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                    <span class="breadcrumb-item active">Company</span>',
            'js_file'              => 'company',
            'data'              => array(
                'my_company'    => $this->main_model->view('my_company')->row(),
                'events'    => $this->mainmodel->view_where_ordering_limit('events', array('status_id' => 2), 'event_id', 'desc', 0, 10  )->result_array(),
                'total_event' => $this->mainmodel->view_where_custom_select('events', array('count(event_id) as total_event'), array('status_id' => 2))->row()
            )
        );
        $this->template->render_view('admin/template_admin_v', $data);
    }

}