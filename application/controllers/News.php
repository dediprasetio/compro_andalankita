<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class News extends Main_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('main_model', 'm_main');
		$this->load->library('Lib_date');
		$this->initialize_cookie();
	}

	public function index()
{
    // Load the pagination library and model
    $this->load->library('pagination');
    $this->load->model('m_main');

    // Configure pagination
    $config['base_url'] = base_url('news/index');
    $config['total_rows'] = $this->m_main->view_where_custom_select('news', 'count(*) as total_news', array('status_id' => 2))->row()->total_news;
    $config['per_page'] = 9;
    $config['uri_segment'] = 3;

    // Bootstrap 4 pagination styling
    $config['full_tag_open'] = '<ul class="pagination pagination-lg m-0">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['prev_link'] = '<i class="bi bi-arrow-left"></i>';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '<i class="bi bi-arrow-right"></i>';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $paging['page'] = $page;
    $paging['perpage'] = $config['per_page'];

    $news = $this->m_main->view_where_ordering_limit('news', array('status_id' => 2), 'news_id', 'DESC', ($paging['page'] * $paging['perpage']) - $paging['perpage'], $paging['perpage'])->result_array();

    $data = array(
        'content'       => 'frontend/page/news_v',
        'breadcrumb'    => '<a href="" class="h5 text-white">Home</a>
                            <i class="far fa-circle text-white px-2"></i>
                            <a href="" class="h5 text-white">News</a>',
        'active_menu'   => 'news',
        'data' => array(
            'page_data' => $this->m_main->view_where('pages', array('page_code' => 'news'))->row(),
            'my_company' => $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
            'news' => $news,
            'total_event' => $config['total_rows'],
            'pagination' => $this->pagination->create_links(),
        )
    );

    $this->template->render_view('frontend/template_v', $data);
}

	public function detail()
	{
		$data = array(
			'content' => 'page/agenda_detail_v',
			'breadcrumb' => '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Agenda</span><span class="breadcrumb-item active">Agenda Detail</span>',
			'active_menu'	=> 'agenda',
			'data' => array(
				'agenda_detail' => $this->m_main->view_where('events', array('event_id' => $this->uri->segment(3)))->row(),
				'my_company'	=> $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
				'advertisement'	=> $this->m_main->view_join_one_all_where('advertisement','mst_status','status_id',array('advertisement.status_id !=' => 5),'advertisement.id','desc')->result_array()
			)
		);
		$this->template->render_view('template_v', $data);
	}
}