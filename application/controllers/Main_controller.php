<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_controller extends CI_Controller
{
    public function initialize_cookie(){
        setcookie(SHORT_APP_NAME_VARIABLE_JS.'_BASE_URL', base_url(), time() + (86400 * 30), "/"); // 86400 = 1 day
    }

	public function check_login()
	{
        if($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_level'] != 'agen' || $_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_LOGIN_STATUS'] != 1){
            redirect(base_url().'home/login');
        }
    }

    public function main_variable(){
		return 
            '<script>
                var base_url = "'.base_url().'";
            </script>';
    }
}