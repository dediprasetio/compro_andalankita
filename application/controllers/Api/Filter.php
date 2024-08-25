<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Filter extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->model('filter_model', 'f_property');
        $this->load->library('lib_main');
        $this->check_login('admin');
    }

    public function index()
    {
        
    }
    
    public function property()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        /**************************** View By Agent ******************************/
        // $properties = $this->f_property->filter(
        //     $config['offset'],
        //     $config['perpage'],
        //     $this->input->post('category'),
        //     $this->input->post('bedroom'),
        //     $this->input->post('land_area'),
        //     $this->input->post('price'),
        //     '',
        //     $this->input->post('agent_name')
        // );
        // $agent = empty($this->input->post('my_property')) ? '' : $this->input->post('my_property');
        // $total_properties = $this->f_property->totalRowsFilter(
        //     $this->input->post('category'),
        //     $this->input->post('bedroom'),
        //     $this->input->post('land_area'),
        //     $this->input->post('price'),
        //     $this->input->post('agent_name')
        // )->row();
        /*************************************************************************/
        //Get property by Property page
        $properties = $this->f_property->filter(
            $config['offset'],
            $config['perpage'],
            $this->input->post('category'),
            $this->input->post('bedroom'),
            $this->input->post('land_area'),
            $this->input->post('price'),
            '',
            ''
        );
        $agent = empty($this->input->post('my_property')) ? '' : $this->input->post('my_property');
        //Get total rows property
        $total_properties = $this->f_property->totalRowsFilter(
            $this->input->post('category'),
            $this->input->post('bedroom'),
            $this->input->post('land_area'),
            $this->input->post('price'),
            ''
        )->row();
        /**************************** View By Agent ******************************/
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }
}
