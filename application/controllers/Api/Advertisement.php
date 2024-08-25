<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Advertisement extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib_main');
        $this->load->model('main_model', 'm_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_main->view_join_one_all_where('advertisement','mst_status','status_id',array('advertisement.status_id !=' => 5),'advertisement.id','desc');
        $dataArray = array(
            'status' => 'Success',
            'message' => 'Result Data',
            'data' => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }
    public function get_by_id()
    {
        $result = $this->m_main->view_where('advertisement', array('id' => $this->input->get('id')));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data',
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
            $config['upload_path'] = "./public/global-images/advertisement/"; //path folder file upload
            $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type file yang boleh di upload
            $config['encrypt_name'] = FALSE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 
            if ($this->upload->do_upload("photo")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image_name = $data['upload_data']['file_name']; //set file name ke variable image

                $inputData = array(
                    'title'   => $this->input->post('title'),
                    'photo'   => $image_name,
                    'description'   => $this->input->post('description'),
                    'status_id'   => $this->input->post('status_id'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );
                $this->main_model->insert($inputData, 'advertisement');
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil menambahkan'
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
                    ->set_status_header(500, 'Gagal upload image, silahkan coba kembali dengan format GIF, JPEG, JPG atau PNG.')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
        } catch (\Throwable $th) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $th
            );
            $this->output
                ->set_status_header(500, 'Gagal menambahkan')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function update()
    {
        try {
            $updateData = array(
                'title'   => $this->input->post('title'),
                'description'   => $this->input->post('description'),
                'status_id'   => $this->input->post('status_id'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                'updated_at'    => date('y-m-d h:i:s')
            );

            if (!empty($_FILES['userfile']['name'])) {
                $config['upload_path'] = "./public/global-images/advertisement/"; //path folder file upload
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type file yang boleh di upload
                $config['encrypt_name'] = TRUE; //enkripsi file name upload

                $this->load->library('upload', $config); //call library upload 
                if ($this->upload->do_upload("photo")) { //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $image_name = $data['upload_data']['file_name']; //set file name ke variable image
                    $updateData['photo'] = $image_name;
                }
            }

            //Update data user
            $this->main_model->update(
                array('id'=>$this->input->post('id')),
                $updateData,
                'advertisement');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil memperbarui data pengguna'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Gagal memperbarui data pengguna')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function delete()
    {
        try {
            //Delete data set deleted = 1
            $this->main_model->update(
                array('id'=>$this->input->post('id')),
                array('status_id'=>5),
                'advertisement');
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
?>