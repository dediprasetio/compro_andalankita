<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class User extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'm_user');
        $this->load->library('lib_main');
        $this->load->model('main_model', 'm_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_user->all('mst_user');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data User',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_id()
    {
        $result = $this->m_user->getById($this->input->get('id'));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data user',
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
            $check_username = $this->m_main->view_where('mst_user', array('user_name' => $this->input->post('user_name'), 'user_level_id' => $this->input->post('user_level_id'), 'deleted' => 0))->num_rows();
            if($check_username > 0){
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Username sudah terdaftar'
                );
                $this->output
                    ->set_status_header(422, 'Username sudah terdaftar')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
                exit;
            }
            $config['upload_path'] = "./public/images/profile/"; //path folder file upload
            $config['allowed_types'] = 'gif|jpg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 
            if ($this->upload->do_upload("photo")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image_name = $data['upload_data']['file_name']; //set file name ke variable image

                $inputData = array(
                    'user_level_id'   => $this->input->post('user_level_id'),
                    'user_name'   => $this->input->post('user_name'),
                    'user_full_name'   => $this->input->post('user_full_name'),
                    'user_fullname'   => $this->input->post('user_fullname'),
                    'user_email'   => $this->input->post('user_email'),
                    'user_phone_number'   => $this->input->post('user_phone_number'),
                    'id_card'   => $this->input->post('id_card'),
                    'user_password'   => $this->lib_main->hash($this->input->post('password')),
                    'user_photo'   => $image_name,
                    'address'   => $this->input->post('address'),
                    'status'   => $this->input->post('status'),
                    'created_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                    'created_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );
                $this->main_model->insert($inputData, 'mst_user');
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil menambahkan pengguna'
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
                ->set_status_header(500, 'Gagal menambahkan pengguna')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function change_email()
    {
        try {
            $id = $this->uri->segment(4);
            $updateData = array(
                'user_email'   => $this->input->post('user_email'),
                'updated_with'    => $id
            );
            //Update data user
            $this->main_model->update(
                array('user_id'=>$id),
                $updateData,
                'mst_user');
            
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil mengubah email pengguna'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        } catch (\Throwable $err) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $err
            );
            $this->output
                ->set_status_header(500, 'Error')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    
    }

    public function change_phone_number()
    {
        try {
            $id = $this->uri->segment(4);
            $updateData = array(
                'user_phone_number'   => $this->input->post('user_phone_number'),
                'updated_with'    => $id
            );
            //Update data user
            $this->main_model->update(
                array('user_id'=>$id),
                $updateData,
                'mst_user');
            
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil mengubah no telepon pengguna'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        } catch (\Throwable $err) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $err
            );
            $this->output
                ->set_status_header(500, 'Error')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    
    }

    public function update_password()
    {
        try {
            $updateData = array(
                'user_password'   => $this->lib_main->hash($this->input->post('password')),
                'updated_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );
            //Update data user
            $this->main_model->update(
                array('user_id'=>$this->input->post('user_id')),
                $updateData,
                'mst_user');
            
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil mengubah password pengguna'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        } catch (\Throwable $err) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $err
            );
            $this->output
                ->set_status_header(500, 'Error')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    
    }

    public function update_photo()
    {
        try {
            $config['upload_path'] = "./public/cms/images/profile/"; //path folder file upload
            $config['allowed_types'] = 'gif|jpg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 
            if ($this->upload->do_upload("photo")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image_name = $data['upload_data']['file_name']; //set file name ke variable image

                $updateData = array(
                    'user_photo'   => $image_name,
                    'updated_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );

                //Update data user
                $this->main_model->update(
                    array('user_id'=>$this->input->post('user_id')),
                    $updateData,
                    'mst_user');
                    
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil mengubah foto pengguna'
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
                ->set_status_header(500, 'Gagal menambahkan pengguna')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function edit()
    {
        try {
            $user_data = $this->m_main->view_where('mst_user', array('user_name' => $this->input->post('user_name'), 'user_level_id' => $this->input->post('user_level_id'), 'deleted' => 0))->row();
            if($user_data->user_name != $this->input->post('user_name')){ //Data Exist
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Username sudah terdaftar'
                );
                $this->output
                    ->set_status_header(422, 'Username sudah terdaftar')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
                exit;
            }
            $updateData = array(
                'user_level_id'   => $this->input->post('user_level_id'),
                'user_name'   => $this->input->post('user_name'),
                'user_full_name'   => $this->input->post('user_full_name'),
                'user_fullname'   => $this->input->post('user_fullname'),
                'user_email'   => $this->input->post('user_email'),
                'user_phone_number'   => $this->input->post('user_phone_number'),
                'id_card'   => $this->input->post('id_card'),
                'address'   => $this->input->post('address'),
                'status'   => $this->input->post('status'),
                'created_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data user
            $this->main_model->update(
                array('user_id'=>$this->input->post('user_id')),
                $updateData,
                'mst_user');

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
                array('user_id'=>$this->input->post('id')),
                array('deleted'=>1),
                'mst_user');
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
