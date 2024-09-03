<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class News extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{
        $data = array(
			'page_title'	=> 'News',
			'content' 		=> 'admin/pages/news_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">News</span>',
			'js_file'		=> 'news',
			'data'			=> array(
				'status_list'	=> $this->mainmodel->view('mst_status')->result_array(),
				'mst_category_list'	=> $this->mainmodel->view('mst_category')->result_array(),
                'news'    => $this->mainmodel->view_where_ordering_limit('news', array('news_id' => 2), 'news_id', 'desc', 0, 10  )->result_array(),
                'total_news' => $this->mainmodel->view_where_custom_select('news', array('count(news_id) as total_news'), array('status_id' => 2))->row()
			),
		);
        $this->template->render_view('admin/template_admin_v', $data);
	}
}
?>