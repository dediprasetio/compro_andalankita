<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api_main_controller extends CI_Controller
{

	public function check_login($level)
	{
        if(SHORT_APP_NAME.'_'.'level' == $level && $this->session->userdata(SHORT_APP_NAME.'_'.'loginstatus') != true){
            $dataArray = array(
                'status'    => 'Error',
                'message'   => 'Please login again.'
            );
            $this->output
                ->set_status_header(401, 'Unauthorized, Please login again.')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
            exit;
        }
    }

    public function main_variable(){
		return 
            '<script>
                var base_url = "'.base_url().'";
                console.log(base_url);
            </script>';
    }
}