<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_company extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function edit()
    {
        try {
            //Update data my company
            $this->main_model->update(
                array('company_id'=>1),
                $this->input->post(),
                'my_company');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success update data my company'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Update data my company failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}
