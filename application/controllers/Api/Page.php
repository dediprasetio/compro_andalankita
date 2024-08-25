<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Page extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model', 'm_event');
        $this->load->library('lib_main');
        $this->load->model('main_model', 'm_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_main->view_join_two('events','mst_category','mst_status', 'category_id', 'status_id',array('events.status_id != ' => '5'),'event_id','desc');
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
        $result = $this->m_main->view_where('pages', array('page_id' => $this->input->get('id')));
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

    public function update()
    {
        try {
            $updateData = array(
                'page_title'   => $this->input->post('page_title'),
                'short_description'   => $this->input->post('short_description'),
                'page_content'   => $this->input->post('page_content'),
                'status_id'   => 2,
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                'updated_at'    => 'now()'
            );

            try {
                // if (!empty($_FILES['userfile']['name'])) {
                //     echo json_encode('photo detected');exit;
                    $config['upload_path'] = "./public/global-images/pages/"; //path folder file upload
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type file yang boleh di upload
                    $config['encrypt_name'] = false; //enkripsi file name upload
    
                    $this->load->library('upload', $config); //call library upload 
                    if ($this->upload->do_upload("photo")) { //upload file
                        $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                        $image_name = $data['upload_data']['file_name']; //set file name ke variable image
                        $updateData['photo'] = $image_name;
                    }
                // }
            } catch (\Throwable $th) {
                throw $th;
            }

            //Update data user
            $this->main_model->update(
                array('page_id'=>$this->input->post('page_id')),
                $updateData,
                'pages');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil memperbarui data pengguna',
                'data'      => $updateData
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
}
?>