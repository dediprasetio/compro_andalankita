<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Area extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->model('area_model', 'm_area');
        $this->load->library('lib_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_area->all();
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data area',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_id()
    {
        $result = $this->m_area->getById($this->input->get('id'));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data area',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_city()
    {
        $result = $this->m_area->getByCity($this->input->get('id'));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data area',
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
                'area_name'   => $this->input->post('area_name'),
                'city_id'   => $this->input->post('city_id'),
                'area_description'   => $this->input->post('area_description'),
                'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
            );
            $this->main_model->insert($inputData, 'mst_area');
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil menambahkan area baru'
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
                ->set_status_header(500, 'Gagal menambahkan area baru')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function edit()
    {
        try {
            $updateData = array(
                'area_name'   => $this->input->post('area_name'),
                'city_id'   => $this->input->post('city_id'),
                'area_description'   => $this->input->post('area_description'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data user
            $this->main_model->update(
                array('area_id'=>$this->input->post('area_id')),
                $updateData,
                'mst_area');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil memperbarui data pemilik'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Gagal memperbarui data pemilik')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}
