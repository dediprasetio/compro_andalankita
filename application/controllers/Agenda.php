<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Agenda extends Main_controller
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
		$page = $this->uri->segment(3);
		$paging['page'] = $page == '' ? 1 : $page <= 0 ? 1 : $page;
		$paging['perpage'] = 9;

		$events = $this->m_main->view_where_ordering_limit('events', array('status_id' => 2), 'event_id', 'DESC', ($paging['page'] * $paging['perpage']) - $paging['perpage'], $paging['perpage'])->result_array();
		$total_event = $this->m_main->view_where_custom_select('events', 'count(*) as total_event', array('status_id' => 2))->row();

		$data = array(
			'content' => 'page/agenda_v',
			'breadcrumb' => '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Hubungi Kami</span>',
			'active_menu'	=> 'agenda',
			'events' => $events,
			'total_event' => $total_event,
			'paging' => $paging,
			'data'	=> array(
				'my_company'	=> $this->m_main->view_where('my_company', array('company_id' => 1))->row(),
			)
		);
		$this->template->render_view('template_v', $data);
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