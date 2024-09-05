<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Contact_us extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->library('lib_main');
    }

    public function index()
    {
        $result = $this->m_main->viewWhereOrdering('contact_us', array('deleted' => 0), 'id', 'ASC');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data contact us',
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
                'name'   => $this->input->post('name'),
                'email'   => $this->input->post('email'),
                'subject'   => $this->input->post('subject'),
                'message'   => $this->input->post('message'),
            );
            $this->main_model->insert($inputData, 'contact_us');
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil mengirim pesan'
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
                ->set_status_header(500, 'Gagal mengirim pesan')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }
}
