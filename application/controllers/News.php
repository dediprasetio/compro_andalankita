<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class News extends Main_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('main_model', 'm_main');
        $this->load->model('News_model','m_news');
		$this->load->library('Lib_date');
		$this->initialize_cookie();
	}

	public function index()
    {
        // Load the pagination library and model
        $this->load->library('pagination');

        //Get All Data
        $news = $this->m_news->all();

        $config['base_url'] = base_url('news/index'); // URL to the pagination controller
        $config['total_rows'] = count($news); // Total number of items in the array
        $config['per_page'] = 8; // Number of items per page
        $config['uri_segment'] = 3; // The segment that contains the page number

        // Optional: Customize the pagination links with Bootstrap 4 styling
        $config['full_tag_open'] = '<ul class="pagination pagination-lg m-0">';
        $config['full_tag_close'] = '</ul>';
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
        $config['attributes'] = array('class' => 'page-link'); // Add class to links

        // Initialize the pagination
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
        $offset = ($page) ? ($page - 1) * $config['per_page'] : 0;
        // echo json_encode($offset);exit;

        $news_paging = $this->m_news->get_news_limit(
            $this->uri->segment($config['uri_segment']),
            $config['per_page']
        );

        $latest_news = $this->m_news->get_news_limit(
            1,
            5
        );
        
        // Slice the array to get the data for the current page
        // $news_page = array_slice($news, $offset, $config['per_page']);

        $data = array(
            'content'       => 'frontend/page/news_v',
            'breadcrumb'    => '<a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">News</a>',
            'active_menu'   => 'news',
            'data' => array(
                'page_data' => $this->m_main->view_where('pages', array('page_code' => 'news'))->row(),
                'my_company' => $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
                'categories' => $this->m_main->view_where('mst_category', array('status_id' => 2))->result_array(),
                'news' => $news_paging,
                'latest_news' => $latest_news,
                'total_event' => $config['total_rows'],
                'pagination' => $this->pagination->create_links(),
            )
        );

        $this->template->render_view('frontend/template_v', $data);
}



	public function detail()
	{
        $slug = $this->uri->segment(3);
        $news_by_slug = $this->m_news->get_one_by_slug($slug);

		$data = array(
            'content'       => 'frontend/page/news_v',
            'breadcrumb'    => '<a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">News</a>',
            'active_menu'   => 'news',
            'data' => array(
                'page_data' => $this->m_main->view_where('pages', array('page_code' => 'news'))->row(),
                'my_company' => $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
                'categories' => $this->m_main->view_where('mst_category', array('status_id' => 2))->result_array(),
                'news' => $news_by_slug,
                'pagination' => $this->pagination->create_links(),
            )
        );

        $this->template->render_view('frontend/template_v', $data);
	}

	public function category()
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