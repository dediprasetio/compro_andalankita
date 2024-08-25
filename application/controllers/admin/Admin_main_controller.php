<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_main_controller extends CI_Controller
{

	public function check_login()
	{
        if(empty($this->session->userdata(SHORT_APP_NAME.'_'.'loginstatus')) || $this->session->userdata(SHORT_APP_NAME.'_'.'loginstatus') != true){
            redirect(base_url().'admin/auth');
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