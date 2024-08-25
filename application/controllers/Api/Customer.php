<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Customer extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->library('lib_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_main->viewWhereOrdering('mst_customer', array('deleted' => 0), 'customer_full_name', 'ASC');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Owner',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function add()
    {
        try {
            $inputData = array(
                'customer_full_name'   => $this->input->post('customer_full_name'),
                'customer_phone_number'   => $this->input->post('customer_phone_number'),
                'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );
            $this->main_model->insert($inputData, 'mst_customer');
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil menambahkan customer'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        } catch (\Throwable $th) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $th
            );
            $this->output
                ->set_status_header(500, 'Gagal menambahkan customer')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }
}
