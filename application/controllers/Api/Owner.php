<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Owner extends Api_main_controller
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
        $result = $this->m_main->viewWhereOrdering('mst_owner', array('deleted' => 0), 'owner_name', 'ASC');
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

    public function get_by_id()
    {
        $result = $this->m_main->viewWhereOrdering('mst_owner', array('deleted' => 0, 'owner_id' => $this->input->get('id')), 'owner_name', 'ASC');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data owner',
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
            $config['upload_path'] = "./public/images/profile/"; //path folder file upload
            $config['allowed_types'] = 'gif|jpg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 

            if ($this->upload->do_upload("owner_photo")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image_name = $data['upload_data']['file_name']; //set file name ke variable image

                $inputData = array(
                    'owner_name'   => $this->input->post('owner_name'),
                    'owner_type'   => $this->input->post('owner_type'),
                    'owner_photo'   => $image_name,
                    'id_number_type'   => $this->input->post('id_number_type'),
                    'owner_phone_number'   => $this->input->post('owner_phone_number'),
                    'owner_email'   => $this->input->post('owner_email'),
                    'address'   => $this->input->post('address'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );
                $this->main_model->insert($inputData, 'mst_owner');
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil menambahkan pemilik aset'
                );
                $this->output
                    ->set_status_header(200, 'Success')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            } else {
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Error Upload.'
                );
                $this->output
                    ->set_status_header(500, 'Gagal upload image, silahkan coba kembali dengan format JPEG, JPG atau PNG.')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
        } catch (\Throwable $th) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $th
            );
            $this->output
                ->set_status_header(500, 'Gagal menambahkan pemilik aset')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function update_photo()
    {
        try {
            $config['upload_path'] = "./public/images/profile/"; //path folder file upload
            $config['allowed_types'] = 'gif|jpg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 

            if ($this->upload->do_upload("owner_photo")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image_name = $data['upload_data']['file_name']; //set file name ke variable image

                $updateData = array(
                    'owner_photo'   => $image_name,
                    'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );
                
                //Update data user
                $this->main_model->update(
                    array('owner_id'=>$this->input->post('owner_id')),
                    $updateData,
                    'mst_owner');

                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil menambahkan pemilik aset'
                );
                $this->output
                    ->set_status_header(200, 'Success')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            } else {
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Error Upload.'
                );
                $this->output
                    ->set_status_header(500, 'Gagal upload image, silahkan coba kembali dengan format JPEG, JPG atau PNG.')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
        } catch (\Throwable $th) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $th
            );
            $this->output
                ->set_status_header(500, 'Gagal menambahkan pemilik aset')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function edit()
    {
        try {
            $updateData = array(
                'owner_name'   => $this->input->post('owner_name'),
                'owner_type'   => $this->input->post('owner_type'),
                'id_number_type'   => $this->input->post('id_number_type'),
                'owner_phone_number'   => $this->input->post('owner_phone_number'),
                'owner_email'   => $this->input->post('owner_email'),
                'address'   => $this->input->post('address'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data user
            $this->main_model->update(
                array('owner_id'=>$this->input->post('owner_id')),
                $updateData,
                'mst_owner');

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

    public function delete()
    {
        try {
            //Delete data set deleted = 1
            $this->main_model->update(
                array('owner_id'=>$this->input->post('id')),
                array('deleted'=>1),
                'mst_owner');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil hapus data'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Hapus data gagal')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}
