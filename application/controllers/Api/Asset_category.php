<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Asset_category extends Api_main_controller
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
        $result = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Jenis Aset',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_id()
    {
        $result = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0, 'asset_category_id' => $this->input->get('id')), 'asset_category_name', 'ASC');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data jenis aset',
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
                'asset_category_name'   => $this->input->post('asset_category_name'),
                'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
            );
            $this->main_model->insert($inputData, 'mst_asset_category');
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil menambahkan jenis aset'
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
                ->set_status_header(500, 'Gagal menambahkan jenis aset')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function edit()
    {
        try {
            $updateData = array(
                'asset_category_name'   => $this->input->post('asset_category_name'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data user
            $this->main_model->update(
                array('asset_category_id'=>$this->input->post('asset_category_id')),
                $updateData,
                'mst_asset_category');

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
