<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Service extends Api_main_controller
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
    }

    public function add()
    {
        try {
            //Add table Service
            $inputData = array(
                'property_id'   => $this->input->post('property_id'),
                'customer_id'   => $this->input->post('customer_id'),
                'description'   => $this->input->post('description'),
                'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
            );
            $this->main_model->insert($inputData, 'service');
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil transaksi'
            );

            //Update table Property
            $updateData = array(
                'sale_status'   => 1,
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data property
            $this->main_model->update(
                array('property_id'=>$this->input->post('property_id')),
                $updateData,
                'property');

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
                ->set_status_header(500, 'Gagal transaksi')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }
}
